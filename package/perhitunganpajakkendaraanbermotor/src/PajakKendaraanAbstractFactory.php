<?php

namespace PerhitunganPajakKendaranBermotor;

use PerhitunganPajakKendaranBermotor\Informasi;
use PerhitunganPajakKendaranBermotor\Pajak;

interface PajakKendaraanAbstractFactory
{
  public function informasiBiayaAdministrasi(): Informasi;
  public function informasiPresentasePajak(): Informasi;
  public function pajakTahunPertama(): Pajak;
  public function pajakSatuTahun(): Pajak;
  // public function getPajak(): Pajak;
  // public function getDenda(): Denda;
}
