<?php 

class MenghitungPajakTahunPertamaMobil implements Pajak{
    private $jumlahPajak;
    private $nilaiJualKendaraan;
    private $swdkllj;
    private $biayaAdministrasi;
    private $biayaAdministrasiPenerbitanSTNK;

    public function __construct(float $nilaiJualKendaraan, float $swdkllj, float $biayaAdministrasi, float $biayaAdministrasiPenerbitanSTNK) {
        $this->nilaiJualKendaraan = $nilaiJualKendaraan;
        $this->swdkllj = $swdkllj;
        $this->biayaAdministrasi = $biayaAdministrasi;
        $this->biayaAdministrasiPenerbitanSTNK = $biayaAdministrasiPenerbitanSTNK;
    }

    public function setPajakTahunPertama() {
        $bbnkb = PajakUtil::hitungBBNKBMobil($this -> nilaiJualKendaraan);
        $pkb = PajakUtil::hitungPKBMobil($this -> nilaiJualKendaraan);
        $this -> jumlahPajak = $bbnkb + $pkb + $this -> swdkllj + $this -> biayaAdministrasi + $this -> biayaAdministrasiPenerbitanSTNK;
    }

    public function getJumlahPajak(): float {
        return $this->jumlahPajak;
    }
}

?>