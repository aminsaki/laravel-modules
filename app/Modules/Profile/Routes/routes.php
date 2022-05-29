<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Profile\Http\Controllers as Controller;







Route::group(['middleware' => 'auth'], function () {
    Route::get('profiles', [Controller\ProfileController::class, 'index'])->name('profile.index');
    Route::post('profiles', [Controller\ProfileController::class, 'update'])->name('profile.update');

});
