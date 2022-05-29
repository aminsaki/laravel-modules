<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Dashboard\Http\Controllers as Controller;


Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard', [Controller\DashboardController::class, 'index'])->name('dashboard.index');

});

