<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');


Route::middleware('auth')->group(function () {

    /* *************
    Auth Routes start
    ****************/
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    /*************
    Auth Routes end
    *************/



    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/demo-dashboard', [DashboardController::class, 'demoDashboard'])->name('demo-dashboard');
});
