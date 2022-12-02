<?php

namespace PerhitunganPajakKendaranBermotor;

class DendaDuaTahunMobil implements DendaDuaTahun
{
  public function getDendaDuaTahun(float $nilaiJualKendaraan): string
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = PajakUtil::swdklljMotor();

    $totalDenda = (((($pkb * 0.25) * 2) * 12) / 12) + $swdkllj;

    $formatText = number_format($totalDenda);

    return $formatText;
  }
}
