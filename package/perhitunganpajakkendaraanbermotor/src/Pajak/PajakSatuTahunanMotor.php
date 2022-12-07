<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakSatuTahunanMotor implements Pajak
{
  private $swdkllj;
  private $biayaAdministrasi;

  public function __construct()
  {
    $this->swdkllj = BiayaAdministrasi::swdklljMotor();
    $this->biayaAdministrasi = BiayaAdministrasi::administrasiMotor();
  }

  public function getJumlahPajak(): float
  {
    return $this->jumlahPajak;
  }

  public function getPajakSatuTahunan(float $nilaiJualKendaraan)
  {
    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
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
