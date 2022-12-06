<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakKendaraan
{
  // Denda
  public static function informasiBiayaAdministrasi($tipeKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $informasi = $factory->informasiBiayaAdministrasi();
    return $informasi->getInformasiBiayaAdministrasi();
  }

  public static function informasiPresentasePajak($tipeKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $informasi = $factory->informasiPresentasePajak();
    return $informasi->getInformasiPresentasePajak();
  }

  // Pajak

  public static function pajakTahunPertama($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $pajak = $factory->pajakTahunPertama();
    return $pajak->getPajakTahunPertama($nilaiJualKendaraan);
  }

  public static function pajakSatuTahunan($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $pajak = $factory->pajakSatuTahunan();
    return $pajak->getPajakSatuTahunan($nilaiJualKendaraan);
  }

  public static function pajakLimaTahun($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $pajak = $factory->pajakLimaTahunan();
    return $pajak->getPajakLimaTahunan($nilaiJualKendaraan);
  }

  // Denda
  public static function dendaSatuBulan($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $denda = $factory->dendaSatuBulan();
    return $denda->getDendaSatuBulan($nilaiJualKendaraan);
  }

  public static function dendaDuaBulan($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $denda = $factory->dendaDuaBulan();
    return $denda->getDendaDuaBulan($nilaiJualKendaraan);
  }

  public static function dendaEnamBulan($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $denda = $factory->dendaEnamBulan();
    return $denda->getDendaEnamBulan($nilaiJualKendaraan);
  }

  public static function dendaSatuTahun($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $denda = $factory->dendaSatuTahun();
    return $denda->getDendaSatuTahun($nilaiJualKendaraan);
  }

  public static function dendaDuaTahun($tipeKendaraan, $nilaiJualKendaraan)
  {
    if ($tipeKendaraan == "motor") {
      $factory = new MotorFactory;
    } else if ($tipeKendaraan == "mobil") {
      $factory = new MobilFactory;
    }

    $denda = $factory->dendaDuaTahun();
    return $denda->getDendaDuaTahun($nilaiJualKendaraan);
  }
}
