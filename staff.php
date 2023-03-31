<?php
require_once 'person.php';
class staff extends person {
    public $nip;
    public $bidang;
    public $gaji;

    public function __construct($nama, $gender, $nip, $bidang, $gaji){
        parent::__construct($nama, $gender);
        $this->nip = $nip;
        $this->bidang = $bidang;
        $this->gaji = $gaji;

    }
    public function cetak(){
        parent::cetak();
        echo "<br> Nomor Induk Pegawai : ".$this->nip;
        echo "<br> Bidang : ".$this->bidang;
        echo "<br> Gaji : ".$this->gaji;
        echo "<hr>";
    }
}

?>