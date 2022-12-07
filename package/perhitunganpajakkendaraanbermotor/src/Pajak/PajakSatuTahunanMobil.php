<?php

namespace PerhitunganPajakKendaranBermotor;

require "../PajakUtil.php";
require "../BiayaAdministrasi.php";

class PajakSatuTahunanMobil implements PajakSatuTahunan
{
  private $swdkllj;
  private $biayaAdministrasi;

  public function __construct()
  {
    $this->swdkllj = BiayaAdministrasi::swdklljMobil();
    $this->biayaAdministrasi = BiayaAdministrasi::administrasiMobil();
  }

  public function getPajakSatuTahunan(float $nilaiJualKendaraan)
  {
    $pkb = PajakUtil::hitungPKBMobil($nilaiJualKendaraan);
    $jumlahPajak = $pkb + $this->swdkllj + $this->biayaAdministrasi;

    return $jumlahPajak;
  }
}
