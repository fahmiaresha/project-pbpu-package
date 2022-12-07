<?php

namespace PerhitunganPajakKendaranBermotor;

interface Pajak
{
  public function getPajakTahunPertama(float $nilaiJualKendaraan);

  public function getPajakSatuTahunan(float $nilaiJualKendaraan);

  public function getPajakLimaTahunan(float $nilaiJualKendaraan);
}
