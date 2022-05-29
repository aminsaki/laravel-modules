<?php

use Illuminate\Support\Facades\Route;

use \App\Modules\Login\Http\Controllers as Controller;


Route::post('login', [Controller\AuthController::class, 'ApiLogin'])->name('api.login');


