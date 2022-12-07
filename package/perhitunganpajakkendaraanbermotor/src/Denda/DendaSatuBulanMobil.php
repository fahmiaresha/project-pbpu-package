<?php

namespace PerhitunganPajakKendaranBermotor;

require "../PajakUtil.php";
require "../BiayaAdministrasi.php";

class DendaSatuBulanMobil implements DendaSatuBulan
{

  public function getDendaSatuBulan(float $nilaiJualKendaraan)
  {
    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);

    $totalDenda = $pkb * 0.25;

    return $totalDenda;
  }
}
