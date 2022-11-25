<?php 

class MenghitungPajakLimaTahunanMobil {
    private $jumlahPajak;
    private $nilaiJualKendaraan;
    private $swdkllj;
    private $biayaAdministrasi;
    private $biayaAdministrasiPenerbitanSTNK;
    private $biayaAdministrasiPengesahanSTNK;
    private $biayaAdministrasiTNKB;

    // constructor
    public function __construct(float $nilaiJualKendaraan, float $swdkllj, float $biayaAdministrasi, float $biayaAdministrasiPenerbitanSTNK, float $biayaAdministrasiPengesahanSTNK, float $biayaAdministrasiTNKB) {
        $this->nilaiJualKendaraan = $nilaiJualKendaraan;
        $this->swdkllj = $swdkllj;
        $this->biayaAdministrasi = $biayaAdministrasi;
        $this->biayaAdministrasiPenerbitanSTNK = $biayaAdministrasiPenerbitanSTNK;
        $this->biayaAdministrasiPengesahanSTNK = $biayaAdministrasiPengesahanSTNK;
        $this->biayaAdministrasiTNKB = $biayaAdministrasiTNKB;
    }    

    public function setPajak() {
        $pkb = PajakUtil::hitungPKBMobil($this -> nilaiJualKendaraan);
        $this -> jumlahPajak = $pkb + $this -> swdkllj + $this -> biayaAdministrasi + $this -> biayaAdministrasiPenerbitanSTNK + $this -> biayaAdministrasiPengesahanSTNK + $this -> biayaAdministrasiTNKB;
    }

    public function getJumlahPajak(): float {
        return $this->jumlahPajak;
    }
}

?>