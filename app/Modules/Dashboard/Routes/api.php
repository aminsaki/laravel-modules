<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Modules\Dashboard\Http\Controllers as Controller;

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('dashboard',[Controller\DashboardController::class ,'index'])->name('dashboard.index');

});
