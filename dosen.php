<?php
require_once 'person.php';
class dosen extends person{
    public $nidn;
    public $gelar;
    public function __construct($nama, $gender, $nidn, $gelar){
        parent::__construct($nama, $gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }
    public function cetak(){
        parent::cetak();
        echo '<br>NIDN : '.$this->nidn;
        echo '<br>Gelar : '.$this->gelar;
        echo '<br><hr>';
    }
}

?>