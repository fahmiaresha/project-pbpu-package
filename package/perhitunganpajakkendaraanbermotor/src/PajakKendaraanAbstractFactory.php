<?php

use PerhitunganPajakKendaranBermotor\Informasi;

interface PajakKendaraanAbstractFactory
{
  public function informasiBiayaAdministrasi(): Informasi;
  public function informasiPresentasePajak(): Informasi;
  public function pajakTahunPertama(): Pajak;
  // public function getPajak(): Pajak;
  // public function getDenda(): Denda;
}
