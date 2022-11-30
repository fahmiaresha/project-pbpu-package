<?php

namespace PerhitunganPajakKendaranBermotor;

interface Informasi
{
  public function getInformasiBiayaAdministrasi(): string;

  public function getInformasiPresentasePajak(): string;
}
