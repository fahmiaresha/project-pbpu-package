<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakSatuTahunanMobil implements Pajak
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

  public function getPajakTahunPertama(float $nilaiJualKendaraan)
  {
    return null;
  }

  public function getPajakLimaTahunan(float $nilaiJualKendaraan)
  {
    return null;
  }
}
