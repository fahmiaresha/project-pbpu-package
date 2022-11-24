<?php 

class MenghitungPajakSatuTahunanMobil {
    private $jumlahPajak;
    private $nilaiJualKendaraan;
    private $swdkllj;
    private $biayaAdministrasi;

    public function __construct(float $nilaiJualKendaraan, float $swdkllj, float $biayaAdministrasi) {
        $this->nilaiJualKendaraan = $nilaiJualKendaraan;
        $this->swdkllj = $swdkllj;
        $this->biayaAdministrasi = $biayaAdministrasi;
    }

    public function setPajak() {
        $pkb = PajakUtil::hitungPKBMobil($this -> nilaiJualKendaraan);
        $this -> jumlahPajak = $pkb + $this -> swdkllj + $this -> biayaAdministrasi;
    }

    public function getJumlahPajak(): float {
        return $this->jumlahPajak;
    }
}

?>