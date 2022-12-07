<?php

namespace PerhitunganPajakKendaranBermotor;

// Informasi
require "Informasi/InformasiBiayaAdministrasiMotor.php";
require "Informasi/InformasiPresentasePajakMotor.php";

// Pajak
require "Pajak/PajakTahunPertamaMotor.php";
require "Pajak/PajakSatuTahunanMotor.php";
require "Pajak/PajakLimaTahunanMotor.php";

// Denda
require "Denda/DendaSatuBulanMotor.php";
require "Denda/DendaDuaBulanMotor.php";
require "Denda/DendaEnamBulanMotor.php";
require "Denda/DendaSatuTahunMotor.php";
require "Denda/DendaDuaTahunMotor.php";

class MotorFactory implements PajakKendaraanAbstractFactory
{
  // Informasi
  public function informasiBiayaAdministrasi(): InformasiBiayaAdministrasi
  {
    return new InformasiBiayaAdministrasiMotor();
  }

  public function informasiPresentasePajak(): InformasiPresentasePajak
  {
    return new InformasiPresentasePajakMotor();
  }

  // Pajak
  public function pajakTahunPertama(): PajakTahunPertama
  {
    return new PajakTahunPertamaMotor();
  }

  public function pajakSatuTahunan(): PajakSatuTahunan
  {
    return new PajakSatuTahunanMotor();
  }

  public function pajakLimaTahunan(): PajakLimaTahunan
  {
    return new PajakLimaTahunanMotor();
  }

  // Denda
  public function dendaSatuBulan(): DendaSatuBulan
  {
    return new DendaSatuBulanMotor();
  }

  public function dendaDuaBulan(): DendaDuaBulan
  {
    return new DendaDuaBulanMotor();
  }

  public function dendaEnamBulan(): DendaEnamBulan
  {
    return new DendaEnamBulanMotor();
  }

  public function dendaSatuTahun(): DendaSatuTahun
  {
    return new DendaSatuTahunMotor();
  }

  public function dendaDuaTahun(): DendaDuaTahun
  {
    return new DendaDuaTahunMotor();
  }
}
