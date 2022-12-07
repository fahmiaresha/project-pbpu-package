<?php

namespace PerhitunganPajakKendaranBermotor;

class InformasiBiayaAdministrasiMobil implements InformasiBiayaAdministrasi
{
  private $InformasiBiayaAdministrasi;

  public function __construct()
  {
    $this->InformasiBiayaAdministrasi = nl2br("
            Informasi Biaya Administrasi Mobil
            -------------------------------------
            1. SWDKLLJ : Rp. 140.000
            2. Administrasi: Rp. 50.000
            3. Pengesahan STNK: Rp. 50.000
            4. Penerbitan STNK: Rp. 200.000
            5. Penerbitan TNKB: Rp. 100.000
            
          ");
  }

  public function getInformasiBiayaAdministrasi()
  {
    echo $this->InformasiBiayaAdministrasi;
  }
}
