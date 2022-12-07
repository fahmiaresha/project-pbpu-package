<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakLimaTahunanMobil implements PajakLimaTahunan
{
  private $swdkllj;
  private $biayaAdministrasi;
  private $biayaAdministrasiPenerbitanSTNK;
  private $biayaAdministrasiPengesahanSTNK;
  private $biayaAdministrasiTNKB;

  // constructor
  public function __construct()
  {
    $this->swdkllj = BiayaAdministrasi::swdklljMobil();
    $this->biayaAdministrasi = BiayaAdministrasi::administrasiMobil();
    $this->biayaAdministrasiPenerbitanSTNK = BiayaAdministrasi::penerbitanStnkMobil();
    $this->biayaAdministrasiPengesahanSTNK = BiayaAdministrasi::pengesahanStnkMobil();
    $this->biayaAdministrasiTNKB = BiayaAdministrasi::penerbitanTnkbMobil();
  }

  public function getPajakLimaTahunan(float $nilaiJualKendaraan)
  {
    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $jumlahPajak = $pkb + $this->swdkllj + $this->biayaAdministrasi + $this->biayaAdministrasiPenerbitanSTNK + $this->biayaAdministrasiPengesahanSTNK + $this->biayaAdministrasiTNKB;

    return $jumlahPajak;
  }
}
