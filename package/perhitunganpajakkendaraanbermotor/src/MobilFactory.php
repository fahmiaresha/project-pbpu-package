<?php

namespace PerhitunganPajakKendaranBermotor;

// Informasi
require "Informasi/InformasiBiayaAdministrasiMobil.php";
require "Informasi/InformasiPresentasePajakMobil.php";

// Pajak
require "Pajak/PajakTahunPertamaMobil.php";
require "Pajak/PajakSatuTahunanMobil.php";
require "Pajak/PajakLimaTahunanMobil.php";

// Denda
require "Denda/DendaSatuBulanMobil.php";
require "Denda/DendaDuaBulanMobil.php";
require "Denda/DendaEnamBulanMobil.php";
require "Denda/DendaSatuTahunMobil.php";
require "Denda/DendaDuaTahunMobil.php";


class MobilFactory implements PajakKendaraanAbstractFactory
{
  // Infotmasi
  public function informasiBiayaAdministrasi(): InformasiBiayaAdministrasi
  {
    return new InformasiBiayaAdministrasiMobil();
  }

  public function informasiPresentasePajak(): InformasiPresentasePajak
  {
    return new InformasiPresentasePajakMobil();
  }

  // Pajak
  public function pajakTahunPertama(): PajakTahunPertama
  {
    return new PajakTahunPertamaMobil();
  }

  public function pajakSatuTahunan(): PajakSatuTahunan
  {
    return new PajakSatuTahunanMobil();
  }

  public function pajakLimaTahunan(): PajakLimaTahunan
  {
    return new PajakLimaTahunanMobil();
  }

  // Denda
  public function dendaSatuBulan(): DendaSatuBulan
  {
    return new DendaSatuBulanMobil();
  }

  public function dendaDuaBulan(): DendaDuaBulan
  {
    return new DendaDuaBulanMobil();
  }

  public function dendaEnamBulan(): DendaEnamBulan
  {
    return new DendaEnamBulanMobil();
  }

  public function dendaSatuTahun(): DendaSatuTahun
  {
    return new DendaSatuTahunMobil();
  }

  public function dendaDuaTahun(): DendaDuaTahun
  {
    return new DendaDuaTahunMobil();
  }
}
