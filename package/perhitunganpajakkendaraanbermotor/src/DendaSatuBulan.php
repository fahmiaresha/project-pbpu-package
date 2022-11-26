<?php

class DendaSatuBulan implements Denda
{

  public function HitungDenda(float $nilaiJualKendaraan): string
  {
    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);

    $totalDenda = $pkb * 0.25;

    $formatText = number_format($totalDenda);

    return $formatText;
  }
}
