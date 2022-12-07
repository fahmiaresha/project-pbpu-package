<?php

namespace PerhitunganPajakKendaranBermotor;

interface PajakKendaraanAbstractFactory
{
  // Informasi
  public function informasiBiayaAdministrasi(): InformasiBiayaAdministrasi;
  public function informasiPresentasePajak(): InformasiPresentasePajak;

  // Pajak
  public function pajakTahunPertama(): PajakTahunPertama;
  public function pajakSatuTahunan(): PajakSatuTahunan;
  public function pajakLimaTahunan(): PajakLimaTahunan;

  // Denda
  public function dendaSatuBulan(): DendaSatuBulan;
  public function dendaDuaBulan(): DendaDuaBulan;
  public function dendaEnamBulan(): DendaEnamBulan;
  public function dendaSatuTahun(): DendaSatuTahun;
  public function dendaDuaTahun(): DendaDuaTahun;
}
