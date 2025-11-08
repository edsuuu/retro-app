<?php

use App\Http\Controllers\Auth\GoogleAuth;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Actions\Logout;
use App\Livewire\Auth\VerifyEmail;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::prefix('oauth2')->middleware('web')->group(function () {
    Route::get('google', GoogleAuth::class)->name('google');
    Route::get('google/callback', [GoogleAuth::class, 'googleCallback']);
});

Route::middleware('guest')->group(function () {
    Route::view('register', 'retro.auth.register')->name('register');
    Route::view('login', 'retro.auth.login')->name('login');
    Route::view('esqueci-senha', 'retro.auth.forgot-password')->name('password.request');
    Route::view('reset-password/{token}', 'retro.auth.reset-password')->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', VerifyEmail::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

Route::post('logout', Logout::class)->name('logout');
