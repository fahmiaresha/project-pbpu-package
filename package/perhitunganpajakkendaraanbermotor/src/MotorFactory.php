<?php

namespace PerhitunganPajakKendaranBermotor;

use PerhitunganPajakKendaranBermotor\Informasi;
use PerhitunganPajakKendaranBermotor\InformasiBiayaAdministrasiMotor;
use PerhitunganPajakKendaranBermotor\InformasiPresentasePajakMotor;
use PerhitunganPajakKendaranBermotor\PajakTahunPertamaMotor;

class MotorFactory implements PajakKendaraanAbstractFactory
{
  public function informasiBiayaAdministrasi(): Informasi
  {
    return new InformasiBiayaAdministrasiMotor();
  }

  public function informasiPresentasePajak(): Informasi
  {
    return new InformasiPresentasePajakMotor();
  }

  public function pajakTahunPertama(): Pajak
  {
    return new PajakTahunPertamaMotor();
  }

  public function pajakSatuTahun(): Pajak
  {
    return new PajakSatuTahunanMotor();
  }

  // public function getPajak(): Pajak
  // {
  //   return new PajakPertamaMotor();
  // }

  // public function getDenda(): Denda
  // {
  //   return new DendaSatuBulanMotor();
  // }
}
