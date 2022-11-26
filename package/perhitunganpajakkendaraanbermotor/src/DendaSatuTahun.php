<?php

class DendaSatuTahun implements Denda
{
  public function HitungDenda(float $nilaiJualKendaraan): string
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = PajakUtil::swdklljMotor();

    $totalDenda = ((($pkb * 0.25) * 12) / 12) + $swdkllj;

    $formatText = number_format($totalDenda);

    return $formatText;
  }
}
