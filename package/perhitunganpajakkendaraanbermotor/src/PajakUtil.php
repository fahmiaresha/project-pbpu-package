<?php

namespace PerhitunganPajakKendaranBermotor;

class PajakUtil
{
  public static function hitungPKBMobil(float $nilaiJualKendaraan): float
  {
    return $nilaiJualKendaraan * 0.02;
  }

  public static function hitungBBNKBMobil(float $hargaJualKendaraan): float
  {
    return $hargaJualKendaraan * 0.1;
  }

  public static function hitungPKBMotor(int $nilaiJualMotor): float
  {
    return $nilaiJualMotor * 0.02;
  }

  public static function hitungBBNKBMotor(int $hargaJualMotor): float
  {
    return $hargaJualMotor * 0.02;
  }
}
