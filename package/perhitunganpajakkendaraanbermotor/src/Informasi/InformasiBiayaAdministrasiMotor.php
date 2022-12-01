<?php

namespace PerhitunganPajakKendaranBermotor;

class InformasiBiayaAdministrasiMotor implements Informasi
{
  private $InformasiBiayaAdministrasi;

  public function __construct()
  {
    $this->InformasiBiayaAdministrasi = nl2br("
            Informasi Biaya Administrasi Motor
            ---------------------------------------
            1. SWDKLLJ : Rp 80.000
            2. Administrasi: Rp. 50.000
            3. Pengesahan STNK: Rp. 25.000
            4. Penerbitan STNK: Rp. 100.000
            5. Penerbitan TNKB: Rp. 60.000
        ");
  }

  public function getInformasiBiayaAdministrasi()
  {
    echo $this->InformasiBiayaAdministrasi;
  }

  public function getInformasiPresentasePajak()
  {
    return null;
  }
}
