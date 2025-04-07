<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\Webmaster\AuthController::class, 'showLoginForm']);
Route::post('/login', [App\Http\Controllers\Webmaster\AuthController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Webmaster\AuthController::class, 'logout'])->name('logout');

Route::post('/register', [App\Http\Controllers\Webmaster\AuthController::class, 'register'])->name('register');
Route::get('/register', [App\Http\Controllers\Webmaster\AuthController::class, 'showRegistrationForm']);

Route::get('/admin', function(){
    return view('app');
})->where('any', '.*');
Route::get('/admin/{any}', function(){
    return view('app');
})->where('any', '.*');
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
