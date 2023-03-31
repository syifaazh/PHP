<?php
class person{
    public $nama;
    public $gender;
    public function __construct($nama, $gender) {
        $this->nama = $nama;
        $this->gender = $gender;
    }
    public function cetak(){
        echo 'Nama ' . $this->nama;
        echo 'Jenis Kelamin' . $this->gender;
    }
}

?>