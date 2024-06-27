<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
        Route::resource('technologies', \App\Http\Controllers\Admin\TechnologyController::class);
        Route::resource('types', \App\Http\Controllers\Admin\TypeController::class);
    });

require __DIR__ . '/auth.php';
