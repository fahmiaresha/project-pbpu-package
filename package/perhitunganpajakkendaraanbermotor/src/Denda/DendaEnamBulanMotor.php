<?php

namespace PerhitunganPajakKendaranBermotor;

class DendaEnamBulanMotor implements DendaEnamBulan
{
  public function getDendaEnamBulan(float $nilaiJualKendaraan): string
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = BiayaAdministrasi::swdklljMotor();

    $totalDenda = ((($pkb * 0.25) * 6) / 12) + $swdkllj;

    return $totalDenda;
  }
}
