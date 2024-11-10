<?php

use App\Http\Controllers\AbsenreportController;
use App\Http\Controllers\AttlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pembagian1Controller;
use App\Http\Controllers\Pembagian2Controller;
use App\Http\Controllers\Pembagian3Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pegawai', PegawaiController::class);
Route::resource('pembagian1', Pembagian1Controller::class);
Route::resource('pembagian2', Pembagian2Controller::class);
Route::resource('pembagian3', Pembagian3Controller::class);
Route::resource('attlog', AttlogController::class);
Route::resource('absenreport', AbsenreportController::class);

