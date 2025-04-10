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
Route::get('/term', [App\Http\Controllers\TestController::class, 'term'])->name('term');
Route::get('/coupon', [App\Http\Controllers\TestController::class, 'coupon'])->name('coupon');
