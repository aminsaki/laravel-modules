<?php

use Illuminate\Support\Facades\Route;
use \App\Modules\Company\Http\Controllers as Controller;



Route::group(['middleware' => 'auth'], function () {
    Route::get('companys', [Controller\CompanyController::class, 'index'])->name('Company.index');
    Route::get('companys/show', [Controller\CompanyController::class, 'show'])->name('Company.show');
    Route::post('companys', [Controller\CompanyController::class, 'store'])->name('Company.store');
    Route::get('companys/delete/{company}', [Controller\CompanyController::class, 'delete'])->name('Company.delete');
    Route::get('companys/edit/{id}', [Controller\CompanyController::class, 'edit'])->name('Company.edit');
    Route::post('companys/update', [Controller\CompanyController::class, 'update'])->name('Company.update');

    //Company license‌
    Route::post('companys/license', [Controller\LicenseController::class, 'statusLicense']);
});


