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

Route::get('/informasi-pajak/{parameter}', function () {
    $param = request('parameter');
    $MelihatInformasiPajakKendaraanFactory = new \PerhitunganPajakKendaranBermotor\MelihatInformasiPajakKendaraanFactory();
    $result = $MelihatInformasiPajakKendaraanFactory->getInformasi($param);
    if($result != null){
        $result->getInformasiPajak();
    }
    else{
        echo "Informasi tidak ditemukan";
    }
});

