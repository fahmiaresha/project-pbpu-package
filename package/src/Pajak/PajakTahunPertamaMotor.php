<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakTahunPertamaMotor implements Pajak
{
  private $swdkllj;
  private $biayaAdministrasi;
  private $biayaAdministrasiPenerbitanSTNK;

  public function __construct()
  {
    $this->swdkllj = BiayaAdministrasi::swdklljMotor();
    $this->biayaAdministrasi = BiayaAdministrasi::administrasiMotor();
    $this->biayaAdministrasiPenerbitanSTNK = BiayaAdministrasi::penerbitanStnkMotor();
  }

  public function getPajakTahunPertama(float $nilaiJualKendaraan)
  {
    $bbnkb = PajakUtil::hitungBBNKBMotor($nilaiJualKendaraan);
    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $jumlahPajak = $bbnkb + $pkb + $this->swdkllj + $this->biayaAdministrasi + $this->biayaAdministrasiPenerbitanSTNK;

    return $jumlahPajak;
  }

  public function getPajakSatuTahunan(float $nilaiJualKendaraan)
  {
    return null;
  }

  public function getPajakLimaTahunan(float $nilaiJualKendaraan)
  {
    return null;
  }
}
