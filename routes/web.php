<?php

use App\Http\Controllers\AlpineController;
use App\Http\Controllers\BasicOperationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Phiki\Phast\Root;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form-submit', [FormController::class, 'submitForm'])->name('form.submit');



Route::prefix('basic')->group(function () {
    Route::get('/', [BasicOperationController::class, 'basicOperation'])->name('basic.operation');
});



Route::prefix('alpine')->group(function(){
    Route::get('/basic',[AlpineController::class, 'basic'])->name('alpine.basic');
});
