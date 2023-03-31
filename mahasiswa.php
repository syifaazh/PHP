<?php
require_once 'person.php';
class mahasiswa extends person{

    public $semester;
    public $jurusan;
    public function __construct($nama, $gender, $semester, $jurusan){
        parent::__construct($nama, $gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }
}

?>