<?php

namespace PerhitunganPajakKendaranBermotor;

class DendaEnamBulanMobil implements DendaEnamBulan
{
  public function getDendaEnamBulan(float $nilaiJualKendaraan): string
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = BiayaAdministrasi::swdklljMobil();

    $totalDenda = ((($pkb * 0.25) * 6) / 12) + $swdkllj;

    $formatText = number_format($totalDenda);

    return $formatText;
  }
}
