<?php 

class MenghitungPajakSatuTahunanMotor {
    private $jumlahPajak;
    private $nilaiJualMotor;
    private $swdkllj;
    private $biayaAdministrasi;

    public function __construct(float $nilaiJualMotor, float $swdkllj, float $biayaAdministrasi) {
        $this->nilaiJualMotor = $nilaiJualMotor;
        $this->swdkllj = $swdkllj;
        $this->biayaAdministrasi = $biayaAdministrasi;
    }

    public function setPajak() {
        $pkb = PajakUtil::hitungPKBMotor($this -> nilaiJualMotor);
        $this -> jumlahPajak = $pkb + $this -> swdkllj + $this -> biayaAdministrasi;
    }

    public function getJumlahPajak(): float {
        return $this->jumlahPajak;
    }
}

?>