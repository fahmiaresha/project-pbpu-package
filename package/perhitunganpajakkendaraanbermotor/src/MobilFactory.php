<?php

namespace PerhitunganPajakKendaranBermotor;

use PerhitunganPajakKendaranBermotor\Informasi;
use PerhitunganPajakKendaranBermotor\InformasiBiayaAdministrasiMobil;
use PerhitunganPajakKendaranBermotor\InformasiPresentasePajakMobil;
use PerhitunganPajakKendaranBermotor\PajakTahunPertamaMobil;

class MobilFactory implements PajakKendaraanAbstractFactory
{
  public function informasiBiayaAdministrasi(): Informasi
  {
    return new InformasiBiayaAdministrasiMobil();
  }

  public function informasiPresentasePajak(): Informasi
  {
    return new InformasiPresentasePajakMobil();
  }

  public function pajakTahunPertama(): Pajak
  {
    return new PajakTahunPertamaMobil();
  }

  public function pajakSatuTahun(): Pajak
  {
    return new PajakSatuTahunanMobil();
  }
  // public function getPajak(): Pajak
  // {
  //   return new PajakPertamaMobil();
  // }

  // public function getDenda(): Denda
  // {
  //   return new DendaSatuBulanMobil();
  // }
}
