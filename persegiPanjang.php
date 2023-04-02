<?php
require_once 'Abstract.php';

class persegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;
    
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        echo 'Persegi Panjang';
    }
    public function LuasBidang(){
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * $this->panjang + 2 * $this->lebar;
        return $keliling;
    }
    public function cetak(){
        $this -> namaBidang();
        echo '<br>Panjang '.$this->panjang;
        echo '<br>Lebar '.$this->lebar;
        echo '<br>Luas Bidang : ' .$this->LuasBidang();
        echo '<br>Keliling Bidang : ' .$this->kelilingBidang();
        echo '<hr>';
    }

}
?>