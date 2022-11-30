<?php

namespace PerhitunganPajakKendaranBermotor;

class InformasiPresentasePajakMotor implements Informasi
{
  private $InformasiPresentasePajak;

  public function __construct()
  {
    $this->InformasiPresentasePajak = nl2br("
            Informasi Presentase Pajak Motor
            ---------------------------------------
            2. PKB: 2% nilai jual motor (NJKB)
            1. BBN KB: 10% harga jual motor
            
            Setelah Tahun Pertama
            1. PKB: 2% nilai jual motor (NJKB)
            
            Pajak 5 Tahun
            1. PKB: 2% nilai jual motor (NJKB)
        ");
  }

  public function getInformasiPresentasePajak()
  {
    echo $this->InformasiPresentasePajak;
  }

  public function getInformasiBiayaAdministrasi()
  {
    return null;
  }
}
