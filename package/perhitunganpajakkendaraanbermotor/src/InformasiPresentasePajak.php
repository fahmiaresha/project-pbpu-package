<?php

class InformasiPresentasePajak extends Informasi {
    private $InformasiPresentasePajak;

    public function __construct() {
        $this->InformasiPresentasePajak = nl2br("
            Informasi Presentase Pajak Mobil
            -------------------------------------
            Tahun Pertama
            1. PKB: 2% nilai jual mobil (NJKB)
            2. BBN KB: 10% harga jual mobil
        
            Setelah Tahun Pertama
            1. PKB: 2% nilai jual mobil (NJKB)
        
            Pajak 5 Tahunan
            1. PKB: 2% nilai jual mobil (NJKB)
            
            Informasi Presentase Pajak Motor
            ---------------------------------------
            1. BBN KB: 10% harga jual motor
            2. PKB: 2% nilai jual motor (NJKB)
            
            Setelah Tahun Pertama
            1. PKB: 2% nilai jual motor (NJKB)
            
            Pajak 5 Tahun
            1. PKB: 2% nilai jual motor (NJKB)
        "); 
    }

    public function getInformasiPajak() {
        echo $this->InformasiPresentasePajak;
    }
}
   

?>