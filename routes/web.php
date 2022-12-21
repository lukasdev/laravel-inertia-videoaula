<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    Contact\ContactController,
    Auth\LoginController,
    Dashboard\DashboardController
};

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index']);


Route::group([
    'prefix' => '/auth'
], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::group([
    'prefix' => '/dashboard',
    'middleware' => ['auth']
], function(){
    
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});