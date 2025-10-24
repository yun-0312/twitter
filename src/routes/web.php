<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PostController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function() {
    Route::redirect('settings', 'settings/profile');
})