<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StateAnalyticsController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

// Analytics routes
Route::get('/analytics/popular-states', [StateAnalyticsController::class, 'mostPopularStates'])->name('analytics.popular-states');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
