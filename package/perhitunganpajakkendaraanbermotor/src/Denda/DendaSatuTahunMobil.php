<?php

namespace PerhitunganPajakKendaranBermotor;

class DendaSatuTahunMobil implements DendaSatuTahun
{
  public function getDendaSatuTahun(float $nilaiJualKendaraan): string
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = BiayaAdministrasi::swdklljMobil();

    $totalDenda = ((($pkb * 0.25) * 12) / 12) + $swdkllj;

    $formatText = number_format($totalDenda);

    return $formatText;
  }
}
