<?php

use App\Http\Controllers\BasicOperationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form-submit', [FormController::class, 'submitForm'])->name('form.submit');



Route::prefix('basic')->group(function () {
    Route::get('/', [BasicOperationController::class, 'basicOperation'])->name('basic.operation');
});
