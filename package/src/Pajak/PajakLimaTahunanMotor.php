<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakLimaTahunanMotor implements Pajak
{
  private $swdkllj;
  private $biayaAdministrasi;
  private $biayaAdministrasiPenerbitanSTNK;
  private $biayaAdministrasiPengesahanSTNK;
  private $biayaAdministrasiTNKB;

  public function __construct()
  {
    $this->swdkllj = BiayaAdministrasi::swdklljMotor();
    $this->biayaAdministrasi = BiayaAdministrasi::administrasiMotor();
    $this->biayaAdministrasiPenerbitanSTNK = BiayaAdministrasi::penerbitanStnkMotor();
    $this->biayaAdministrasiPengesahanSTNK = BiayaAdministrasi::pengesahanStnkMotor();
    $this->biayaAdministrasiTNKB = BiayaAdministrasi::penerbitanTnkbMotor();
  }

  public function getPajakLimaTahunan(float $nilaiJualKendaraan)
  {
    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
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
