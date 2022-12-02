<?php

namespace PerhitunganPajakKendaranBermotor;

class DendaDuaBulanMotor implements DendaDuaBulan
{
  public function getDendaDuaBulan(float $nilaiJualKendaraan)
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = BiayaAdministrasi::swdklljMotor();

    $totalDenda = ((($pkb * 0.25) * 2) / 12) + $swdkllj;

    $formatText = number_format($totalDenda);

    return $formatText;
  }
}
