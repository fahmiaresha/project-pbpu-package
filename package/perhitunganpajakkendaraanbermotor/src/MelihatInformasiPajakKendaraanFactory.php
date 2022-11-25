<?php

class MelihatInformasiPajakKendaraanFactory extends PajakKendaraanAbstractFactory
{

  // public function __construct() {
  // }

  public function getInformasi(string $informasi)
  {
    if (strcasecmp($informasi, 'informasipresentasepajak') == 0) {
      return new InformasiPresentasePajak();
    } elseif (strcasecmp($informasi, 'informasibiayaadministrasi') == 0) {
      return new InformasiBiayaAdministrasi();
    }
    return null;
  }

  public function getPajak(string $pajak)
  {
    return null;
  }

  public function getDenda(string $denda)
  {
    return null;
  }
}
