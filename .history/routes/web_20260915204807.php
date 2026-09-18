<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;   
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

// Route::middleware(['auth'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', [DashboardController::class, 'index']);
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
