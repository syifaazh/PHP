<?php
require_once 'Abstract.php';
class Lingkaran extends Bentuk2D {
    public $jari2;

    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        echo 'Lingkaran';
    }
    public function LuasBidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * 3.14 * $this->jari2;
        return $keliling;
    }
    public function cetak(){
        echo "<table border=1 width=30% align='center'>";
        echo "<tr>
                <th cellpadding=15%>".$this->namaBidang()."</th>
                </tr>";
        echo "<tr>
                <th>Jari-jari</th>
                <th>Luas</th>
                <th>Keliling</th>
              </tr>";
        echo "<tr>
                <td>".$this->jari2."</td>
                <td>".$this->LuasBidang()."</td>
                <td>".$this->kelilingBidang()."</td>
              </tr>";
        echo "</table>";
    }
}
?>