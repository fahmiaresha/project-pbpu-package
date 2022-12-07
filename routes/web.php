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

Route::get('/pajak/tahun-pertama/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $pajak = PerhitunganPajakKendaranBermotor\PajakKendaraan::pajakTahunPertama($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $pajak = PerhitunganPajakKendaranBermotor\PajakKendaraan::pajakTahunPertama($param, $nilaiJualKendaraan);
  }

  echo $pajak;
});

Route::get('/pajak/satu-tahunan/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $pajak = PerhitunganPajakKendaranBermotor\PajakKendaraan::pajakSatuTahunan($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $pajak = PerhitunganPajakKendaranBermotor\PajakKendaraan::pajakSatuTahunan($param, $nilaiJualKendaraan);
  }

  echo $pajak;
});

Route::get('/pajak/lima-tahunan/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $pajak = PerhitunganPajakKendaranBermotor\PajakKendaraan::pajakLimaTahunan($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $pajak = PerhitunganPajakKendaranBermotor\PajakKendaraan::pajakLimaTahunan($param, $nilaiJualKendaraan);
  }

  echo $pajak;
});

Route::get('/pajak/denda-satu-bulan/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaSatuBulan($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaSatuBulan($param, $nilaiJualKendaraan);
  }

  echo $denda;
});


Route::get('/pajak/denda-dua-bulan/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaDuaBulan($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaDuaBulan($param, $nilaiJualKendaraan);
  }

  echo $denda;
});

Route::get('/pajak/denda-enam-bulan/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaEnamBulan($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaEnamBulan($param, $nilaiJualKendaraan);
  }

  echo $denda;
});

Route::get('/pajak/denda-satu-tahun/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaSatuTahun($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaSatuTahun($param, $nilaiJualKendaraan);
  }

  echo $denda;
});

Route::get('/pajak/denda-dua-tahun/{parameter}/{nilai}', function () {
  $param = request('parameter');
  $nilaiJualKendaraan = request('nilai');
  if ($param == "motor") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaDuaTahun($param, $nilaiJualKendaraan);
  } else if ($param == "mobil") {
    $denda = PerhitunganPajakKendaranBermotor\PajakKendaraan::dendaDuaTahun($param, $nilaiJualKendaraan);
  }

  echo $denda;
});
