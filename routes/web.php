<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'retro.welcome')->name('home');

Route::view('criar-retrospectiva', 'retro.retrospective')->name('retrospective');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'retro.dashboard')->name('dashboard');
});

require __DIR__.'/auth.php';
