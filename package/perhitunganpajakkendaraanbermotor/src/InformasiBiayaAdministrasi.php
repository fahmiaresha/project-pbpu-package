<?php

class InformasiBiayaAdministrasi extends Informasi {
    private $InformasiBiayaAdministrasi;

    public function __construct() {
        $this->InformasiBiayaAdministrasi = nl2br("
            Informasi Biaya Administrasi Mobil
            -------------------------------------
            Tahun Pertama    
            1. SWDKLLJ : Rp. 143.000
            2. TNKB: Rp. 100.000
            3. Administrasi dan Penerbitan STNK : Rp. 50.000 + Rp. 200.000 = Rp. 250.0000

            Setelah Tahun Pertama
            1. SWDKLLJ : Rp. 143.000
            2. Administrasi: Rp. 50.000

            Pajak 5 Tahun
            1. SWDKLLJ : Rp. 143.000
            2. Administrasi: Rp. 50.000
            3. Pengesahan STNK: Rp. 50.000
            4. Penerbitan STNK: Rp. 200.000
            5. Penerbitan TNKB: Rp. 100.000
            
            Informasi Biaya Administrasi Motor
            ---------------------------------------
            Tahun Pertama   
            1. SWDKLLJ : Rp 35.000
            2. TNKB : Rp 100.000
            3. Administrasi dan Penerbitan STNK : Rp 50.000 + Rp 100.000
            
            Setelah Tahun Pertama
            1. SWDKLLJ : Rp. 143.000
            2. Administrasi: Rp. 50.000
            
            Pajak 5 Tahun
            1. SWDKLLJ : Rp. 35.000
            2. Administrasi: Rp. 50.000
            3. Pengesahan STNK: Rp. 25.000
            4. Penerbitan STNK: Rp. 100.000
            5. Penerbitan TNKB: Rp. 100.000
        "); 
    }

    public function getInformasiPajak() {
        echo $this->InformasiBiayaAdministrasi;
    }
}

?>