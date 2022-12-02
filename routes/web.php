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

Route::get('/informasi-motor/{parameter}', function () {
    $param = request('parameter');
    $motor = new PerhitunganPajakKendaranBermotor\MotorFactory();
    if($param=="administrasi"){
        $result = $motor->informasiBiayaAdministrasi();
        $result->getInformasiBiayaAdministrasi();       
    }
    elseif($param=="presentase"){
        $result = $motor->informasiPresentasePajak();
        $result->getInformasiPresentasePajak();
    }
    else{
        echo "Informasi tidak ditemukan";
    }
});

Route::get('/informasi-mobil/{parameter}', function () {
    $param = request('parameter');
    $mobil = new PerhitunganPajakKendaranBermotor\MobilFactory();
    if($param=="administrasi"){
        $result = $mobil->informasiBiayaAdministrasi();
        $result->getInformasiBiayaAdministrasi();       
    }
    elseif($param=="presentase"){
        $result = $mobil->informasiPresentasePajak();
        $result->getInformasiPresentasePajak();
    }
    else{
        echo "Informasi tidak ditemukan";
    }
});

