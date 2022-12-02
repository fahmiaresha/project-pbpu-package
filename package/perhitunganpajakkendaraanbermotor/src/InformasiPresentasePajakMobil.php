<?php

namespace PerhitunganPajakKendaranBermotor;

class InformasiPresentasePajakMobil implements Informasi
{
  private $InformasiPresentasePajak;

  public function __construct()
  {
    $this->InformasiPresentasePajak = nl2br("Informasi Presentase Pajak Mobil
            -------------------------------------
            Tahun Pertama
            1. PKB: 2% nilai jual mobil (NJKB)
            2. BBN KB: 10% harga jual mobil
        
            Setelah Tahun Pertama
            1. PKB: 2% nilai jual mobil (NJKB)
        
            Pajak 5 Tahunan
            1. PKB: 2% nilai jual mobil (NJKB)
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
