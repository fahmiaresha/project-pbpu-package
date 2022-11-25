<?php 

class MenghitungPajakLimaTahunanMotor {
    private $jumlahPajak;
    private $nilaiJualMotor;
    private $swdkllj;
    private $biayaAdministrasi;
    private $biayaAdministrasiPenerbitanSTNK;
    private $biayaAdministrasiPengesahanSTNK;
    private $biayaAdministrasiTNKB;

    // constructor
    public function __construct(float $nilaiJualMotor, float $swdkllj, float $biayaAdministrasi, float $biayaAdministrasiPenerbitanSTNK, float $biayaAdministrasiPengesahanSTNK, float $biayaAdministrasiTNKB) {
        $this->nilaiJualMotor = $nilaiJualMotor;
        $this->swdkllj = $swdkllj;
        $this->biayaAdministrasi = $biayaAdministrasi;
        $this->biayaAdministrasiPenerbitanSTNK = $biayaAdministrasiPenerbitanSTNK;
        $this->biayaAdministrasiPengesahanSTNK = $biayaAdministrasiPengesahanSTNK;
        $this->biayaAdministrasiTNKB = $biayaAdministrasiTNKB;
    }    

    public function setPajak() {
        $pkb = PajakUtil::hitungPKBMotor($this -> nilaiJualMotor);
        $this -> jumlahPajak = $pkb + $this -> swdkllj + $this -> biayaAdministrasi + $this -> biayaAdministrasiPenerbitanSTNK + $this -> biayaAdministrasiPengesahanSTNK + $this -> biayaAdministrasiTNKB;
    }

    public function getJumlahPajak(): float {
        return $this->jumlahPajak;
    }
}

?>