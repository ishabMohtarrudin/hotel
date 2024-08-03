<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::resource('/customers', \App\Http\Controllers\CustomersController::class);
Route::resource('/hargahariini', \App\Http\Controllers\HargaHariIniController::class);
Route::resource('/kamar', \App\Http\Controllers\KamarController::class);
//Route::resource('/invoice', \App\Http\Controllers\InvoiceController::class);
//Route::resource('/pembayaran', \App\Http\Controllers\pembayaranController::class);
Route::resource('/reservasi', \App\Http\Controllers\reservasiController::class);
