<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/home-data', function () {
    return response()->json([
        'features' => [
            ['title' => 'Feature 1', 'description' => 'Description for feature 1'],
            ['title' => 'Feature 2', 'description' => 'Description for feature 2'],
        ]
    ]);
});
Route::get('/', [App\Http\Controllers\TestController::class, 'index'])->name('home');
Route::get('/show', [App\Http\Controllers\TestController::class, 'show'])->name('show');
