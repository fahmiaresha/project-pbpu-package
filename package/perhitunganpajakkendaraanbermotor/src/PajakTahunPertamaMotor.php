<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakTahunPertamaMotor implements Pajak
{
  private $jumlahPajak;
  private $nilaiJualMotor;
  private $swdkllj;
  private $biayaAdministrasi;
  private $biayaAdministrasiPenerbitanSTNK;

  public function __construct(float $nilaiJualMotor, float $swdkllj, float $biayaAdministrasi, float $biayaAdministrasiPenerbitanSTNK)
  {
    $this->nilaiJualMotor = $nilaiJualMotor;
    $this->swdkllj = $swdkllj;
    $this->biayaAdministrasi = $biayaAdministrasi;
    $this->biayaAdministrasiPenerbitanSTNK = $biayaAdministrasiPenerbitanSTNK;
  }

  public function setPajakTahunPertama()
  {
    $bbnkb = PajakUtil::hitungBBNKBMotor($this->nilaiJualMotor);
    $pkb = PajakUtil::hitungPKBMotor($this->nilaiJualMotor);
    $this->jumlahPajak = $bbnkb + $pkb + $this->swdkllj + $this->biayaAdministrasi + $this->biayaAdministrasiPenerbitanSTNK;
  }

  public function getJumlahPajak(): float
  {
    return $this->jumlahPajak;
  }
}
