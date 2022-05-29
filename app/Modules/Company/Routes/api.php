<?php

use Illuminate\Support\Facades\Route;

use \App\Modules\Company\Http\Controllers as Controller;


Route::group(['middleware' => 'auth:api'], function () {

    //Company license‌
    Route::post('companys/license', [Controller\LicenseController::class, 'statusLicense']);
});
