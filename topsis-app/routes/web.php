<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\SubBobotController;
use Illuminate\Support\Facades\Route;

Route::resource('karyawan', KaryawanController::class);
Route::resource('kriteria', KriteriaController::class);
Route::resource('sub-bobot', SubBobotController::class);
Route::resource('penilaian', PenilaianController::class);
Route::resource('laporan', LaporanController::class);
