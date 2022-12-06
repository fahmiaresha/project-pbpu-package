<?php

namespace PerhitunganPajakKendaranBermotor;

use PerhitunganPajakKendaranBermotor\Informasi;
use PerhitunganPajakKendaranBermotor\Pajak;

interface PajakKendaraanAbstractFactory
{
  // Informasi
  public function informasiBiayaAdministrasi(): Informasi;
  public function informasiPresentasePajak(): Informasi;

  // Pajak
  public function pajakTahunPertama(): Pajak;
  public function pajakSatuTahunan(): Pajak;
  public function pajakLimaTahunan(): Pajak;

  // Denda
  public function dendaSatuBulan(): DendaSatuBulan;
  public function dendaDuaBulan(): DendaDuaBulan;
  public function dendaEnamBulan(): DendaEnamBulan;
  public function dendaSatuTahun(): DendaSatuTahun;
  public function dendaDuaTahun(): DendaDuaTahun;
}
