<?php

namespace PerhitunganPajakKendaranBermotor;

require "../PajakUtil.php";
require "../BiayaAdministrasi.php";

class DendaDuaBulanMobil implements DendaDuaBulan
{
  public function getDendaDuaBulan(float $nilaiJualKendaraan)
  {

    $pkb = PajakUtil::hitungPKBMobil($nilaiJualKendaraan);
    $swdkllj = BiayaAdministrasi::swdklljMobil();

    $totalDenda = ((($pkb * 0.25) * 2) / 12) + $swdkllj;

    return $totalDenda;
  }
}
