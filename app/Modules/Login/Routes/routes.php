<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Login\Http\Controllers as Controller;

Route::get('/', [Controller\LoginController::class, 'index'])->name('login.index');

Route::middleware(['web'])->group(function () {

    Route::get('/login', [Controller\LoginController::class, 'index'])->name('login');

    Route::post('login', [Controller\AuthController::class, 'login'])->name('loginLogin');

///
    Route::get('logout', [Controller\AuthController::class, 'logout'])->name('logout');
});
