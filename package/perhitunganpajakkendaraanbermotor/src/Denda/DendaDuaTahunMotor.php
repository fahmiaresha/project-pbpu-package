<?php

namespace PerhitunganPajakKendaranBermotor;


class DendaDuaTahunMotor implements DendaDuaTahun
{
  public function getDendaDuaTahun(float $nilaiJualKendaraan): string
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = PajakUtil::swdklljMotor();

    $totalDenda = (((($pkb * 0.25) * 2) * 12) / 12) + $swdkllj;

    return $totalDenda;
  }
}
