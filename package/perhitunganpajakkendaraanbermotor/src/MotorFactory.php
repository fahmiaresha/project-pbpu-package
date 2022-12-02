<?php

namespace PerhitunganPajakKendaranBermotor;

class MotorFactory implements PajakKendaraanAbstractFactory
{
  // Informasi
  public function informasiBiayaAdministrasi(): Informasi
  {
    return new InformasiBiayaAdministrasiMotor();
  }

  public function informasiPresentasePajak(): Informasi
  {
    return new InformasiPresentasePajakMotor();
  }

  // Pajak
  public function pajakTahunPertama(): Pajak
  {
    return new PajakTahunPertamaMotor();
  }

  public function pajakSatuTahun(): Pajak
  {
    return new PajakSatuTahunanMotor();
  }

  public function pajakLimaTahun(): Pajak
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
