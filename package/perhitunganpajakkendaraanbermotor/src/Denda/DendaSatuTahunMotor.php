<?php

namespace PerhitunganPajakKendaranBermotor;

require "../PajakUtil.php";
require "../BiayaAdministrasi.php";

class DendaSatuTahunMotor implements DendaSatuTahun
{
  public function getDendaSatuTahun(float $nilaiJualKendaraan): string
  {

    $pkb = PajakUtil::hitungPKBMotor($nilaiJualKendaraan);
    $swdkllj = BiayaAdministrasi::swdklljMotor();

    $totalDenda = ((($pkb * 0.25) * 12) / 12) + $swdkllj;

    return $totalDenda;
  }
}
