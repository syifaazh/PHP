<?php
require_once 'Abstract.php';

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo 'Segitiga';
    }
    public function LuasBidang(){
        $luas = 1/2 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling;
        return $keliling;
    }
    public function cetak(){
        echo '<br>Alas :'.$this->alas;
        echo '<br>Tinggi :'.$this->tinggi;
        echo '<br>Luas Bidang :'.$this->luas;
        echo '<br>Keliling Bidang :'.$this->keliling;
    }

}
?>