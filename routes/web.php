<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/informasi-biaya-administrasi/{parameter}', function () {
  $param = request('parameter');
  if ($param == "motor") {
    $informasi = PerhitunganPajakKendaranBermotor\PajakKendaraan::informasiBiayaAdministrasi($param);
  } else if ($param == "mobil") {
    $informasi = PerhitunganPajakKendaranBermotor\PajakKendaraan::informasiBiayaAdministrasi($param);
  }

  echo $informasi;
});

Route::get('/informasi-presentase-pajak/{parameter}', function () {
  $param = request('parameter');
  if ($param == "motor") {
    $informasi = PerhitunganPajakKendaranBermotor\PajakKendaraan::informasiPresentasePajak($param);
  } else if ($param == "mobil") {
    $informasi = PerhitunganPajakKendaranBermotor\PajakKendaraan::informasiPresentasePajak($param);
  }

  echo $informasi;
});

Route::get('/pajak', function () {
  $motor = PerhitunganPajakKendaranBermotor\PajakKendaraan::denda(5000);

  echo $motor;
});
