<?php

namespace PerhitunganPajakKendaranBermotor;

class MobilFactory implements PajakKendaraanAbstractFactory
{
  // Infotmasi
  public function informasiBiayaAdministrasi(): Informasi
  {
    return new InformasiBiayaAdministrasiMobil();
  }

  public function informasiPresentasePajak(): Informasi
  {
    return new InformasiPresentasePajakMobil();
  }

  // Pajak
  public function pajakTahunPertama(): Pajak
  {
    return new PajakTahunPertamaMobil();
  }

  public function pajakSatuTahun(): Pajak
  {
    return new PajakSatuTahunanMobil();
  }

  public function pajakLimaTahun(): Pajak
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
