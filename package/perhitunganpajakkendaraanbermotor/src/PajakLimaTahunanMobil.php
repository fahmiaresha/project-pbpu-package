<?php

namespace PerhitunganPajakKendaranBermotor;

class MenghitungPajakLimaTahunanMobil implements Pajak
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
    $pkb = PajakUtil::hitungPKBMotor($this->nilaiJualMotor);
    $jumlahPajak = $pkb + $this->swdkllj + $this->biayaAdministrasi + $this->biayaAdministrasiPenerbitanSTNK + $this->biayaAdministrasiPengesahanSTNK + $this->biayaAdministrasiTNKB;

    return $jumlahPajak;
  }

  public function getPajakTahunPertama(float $nilaiJualKendaraan)
  {
    return null;
  }

  public function getPajakSatuTahunan(float $nilaiJualKendaraan)
  {
    return null;
  }
}
