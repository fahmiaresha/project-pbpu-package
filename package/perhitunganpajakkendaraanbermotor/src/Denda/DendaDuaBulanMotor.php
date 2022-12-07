<?php

namespace PerhitunganPajakKendaranBermotor;


class DendaDuaBulanMotor implements DendaDuaBulan
{
  public function getDendaDuaBulan(float $nilaiJualKendaraan)
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = BiayaAdministrasi::swdklljMotor();

    $totalDenda = ((($pkb * 0.25) * 3) / 12) + $swdkllj;

    return $totalDenda;
  }
}
