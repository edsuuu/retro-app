<?php

use App\Http\Controllers\Api\UnifiedAssetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
|--------------------------------------------------------------------------
| Asset Routes - Sistema Unificado
|--------------------------------------------------------------------------
*/

Route::prefix('asset')->name('api.asset.')->group(function () {

    // Busca e autocomplete
    Route::get('/search/autocomplete', [UnifiedAssetController::class, 'search'])
        ->name('search');

    // Cotações em lote
    Route::get('/quotes/batch', [UnifiedAssetController::class, 'quotes'])
        ->name('quotes');

    // Status das APIs
    Route::get('/status', [UnifiedAssetController::class, 'status'])
        ->name('status');

    // Dados do ativo (deve vir depois das rotas estáticas)
    Route::get('/{ticker}', [UnifiedAssetController::class, 'show'])
        ->name('show')
        ->where('ticker', '[A-Z0-9]{4,6}');

    // Histórico de preços
    Route::get('/{ticker}/prices', [UnifiedAssetController::class, 'prices'])
        ->name('prices')
        ->where('ticker', '[A-Z0-9]{4,6}');

    // Histórico de dividendos
    Route::get('/{ticker}/dividends', [UnifiedAssetController::class, 'dividends'])
        ->name('dividends')
        ->where('ticker', '[A-Z0-9]{4,6}');

    // Análise técnica (futuro)
    Route::get('/{ticker}/technical', [UnifiedAssetController::class, 'technical'])
        ->name('technical')
        ->where('ticker', '[A-Z0-9]{4,6}');
});

/*
|--------------------------------------------------------------------------
| Admin/System Routes (protegidas por auth)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware(['auth:sanctum'])->name('api.admin.')->group(function () {

    // Estatísticas do sistema
    Route::get('/stats', function () {
        return response()->json([
            'cache_stats' => \Cache::get('daily_stats_' . now()->toDateString()),
            'api_health' => \Cache::get('api_health_status'),
            'last_update' => \Cache::get('last_price_update_stats'),
        ]);
    })->name('stats');

    // Forçar atualização de um ativo
    Route::post('/asset/{ticker}/refresh', function (string $ticker) {
        $assetService = app(\App\Services\UnifiedAssetService::class);

        // Clear cache
        \Cache::forget("unified_asset:{$ticker}");

        // Get fresh data
        $asset = $assetService->getUnifiedAssetData($ticker);

        return response()->json([
            'message' => 'Asset refreshed successfully',
            'data' => $asset ? new \App\Http\Resources\UnifiedAssetResource($asset) : null,
        ]);
    })->name('asset.refresh');

    // Limpar cache
    Route::post('/cache/clear', function () {
        \Cache::flush();
        return response()->json(['message' => 'Cache cleared successfully']);
    })->name('cache.clear');

    // Dispatch job manualmente
    Route::post('/jobs/update-prices', function (Request $request) {
        $tickers = $request->get('tickers', []);
        $force = $request->boolean('force', false);

        \App\Jobs\UpdateAssetPricesJob::dispatch($tickers, $force);

        return response()->json([
            'message' => 'Price update job dispatched',
            'tickers' => $tickers,
            'force' => $force,
        ]);
    })->name('jobs.update-prices');
});

/*
|--------------------------------------------------------------------------
| Comparador de Ativos
|--------------------------------------------------------------------------
*/

Route::prefix('compare')->name('api.compare.')->group(function () {

    // Comparar múltiplos ativos
    Route::get('/', function (Request $request) {
        $tickers = explode(',', $request->get('tickers', ''));
        $tickers = array_filter(array_map('trim', array_map('strtoupper', $tickers)));

        if (count($tickers) < 2 || count($tickers) > 5) {
            return response()->json([
                'error' => 'Provide between 2 and 5 tickers separated by commas'
            ], 400);
        }

        $assetService = app(\App\Services\UnifiedAssetService::class);
        $comparison = [];

        foreach ($tickers as $ticker) {
            $asset = $assetService->getUnifiedAssetData($ticker);
            if ($asset) {
                $comparison[$ticker] = new \App\Http\Resources\UnifiedAssetResource($asset);
            }
        }

        return response()->json([
            'data' => $comparison,
            'meta' => [
                'requested' => $tickers,
                'found' => count($comparison),
                'timestamp' => now()->toISOString(),
            ]
        ]);
    })->name('assets');
});

/*
|--------------------------------------------------------------------------
| Watchlist/Favorites (futuro - requer auth)
|--------------------------------------------------------------------------
*/

Route::prefix('watchlist')->middleware(['auth:sanctum'])->name('api.watchlist.')->group(function () {

    // Listar favoritos
    Route::get('/', function (Request $request) {
        // Implementar lógica de watchlist
        return response()->json(['data' => []]);
    })->name('index');

    // Adicionar aos favoritos
    Route::post('/{ticker}', function (Request $request, string $ticker) {
        // Implementar lógica para adicionar
        return response()->json(['message' => 'Added to watchlist']);
    })->name('add');

    // Remover dos favoritos
    Route::delete('/{ticker}', function (Request $request, string $ticker) {
        // Implementar lógica para remover
        return response()->json(['message' => 'Removed from watchlist']);
    })->name('remove');
});

/*
|--------------------------------------------------------------------------
| Health Check
|--------------------------------------------------------------------------
*/

Route::get('/health', function () {
    $assetService = app(\App\Services\UnifiedAssetService::class);

    return response()->json([
        'status' => 'ok',
        'timestamp' => now()->toISOString(),
        'services' => $assetService->getServiceStatus(),
        'cache' => [
            'driver' => config('cache.default'),
            'working' => \Cache::put('health_check', true, 60),
        ],
        'database' => [
            'connected' => \DB::connection()->getPdo() ? true : false,
        ],
    ]);
})->name('health');

/*
|--------------------------------------------------------------------------
| Rate Limited Public Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['throttle:api'])->group(function () {
    // Rotas públicas com rate limiting já estão cobertas acima
});

/*
|--------------------------------------------------------------------------
| Development/Debug Routes (apenas em ambiente local)
|--------------------------------------------------------------------------
*/

if (app()->environment('local')) {
    Route::prefix('debug')->name('api.debug.')->group(function () {

        // Ver cache de um ativo
        Route::get('/cache/{ticker}', function (string $ticker) {
            return response()->json([
                'asset' => \Cache::get("unified_asset:{$ticker}"),
                'prices' => \Cache::get("prices:{$ticker}:1y:1d"),
                'dividends' => \Cache::get("dividends:{$ticker}:2y"),
            ]);
        });

        // Simular erro de API
        Route::get('/simulate-error', function () {
            throw new \Exception('Simulated API error for testing');
        });

        // Ver estatísticas do cache
        Route::get('/cache-stats', function () {
            return response()->json([
                'daily_stats' => \Cache::get('daily_stats_' . now()->toDateString()),
                'api_health' => \Cache::get('api_health_status'),
                'update_stats' => \Cache::get('last_price_update_stats'),
                'update_error' => \Cache::get('last_price_update_error'),
            ]);
        });
    });
}
