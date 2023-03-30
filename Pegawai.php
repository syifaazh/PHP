<?php
    class Pegawai{
        //member variables
        protected $nip;
        public $nama;
        private $jabatan;
        private $agama;
        private $status;
        static $jml = 0;
        const PT = 'PT. HTP Indonesia';


        //constructor untuk menyimpan variable yang akan dikirimkan ke file object
        public function __construct($nip, $nama, $jabatan, $agama, $status){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
            self::$jml++;
            
        }

        //menentukan gaji pokok
        public function setGajiPokok($jabatan){
            $this->jabatan = $jabatan;
            switch($jabatan){
                case 'Manager' : $gapok = 15000000; break;
                case 'Asisten Manager' : $gapok = 10000000; break;
                case 'Kepala Bagian' : $gapok = 7000000; break;
                case 'Staff' : $gapok = 5000000; break;
                default:$gapok;
            }
            return $gapok;
        }

        //menentukan Tunjangan Jabatan
        public function setTunjab($jabatan){
            $this->jabatan = $jabatan;
            $tunjab = $this->setGajiPokok($jabatan) * 0.2;
            return $tunjab;
        }

        //menentukan Tunjangan Keluarga
        public function setTunkel($status){
            $this->status = $status;
            $tunkel = ($this->status == 'Menikah') ? $this->setGajiPokok($this->jabatan) * 0.1 : 0;
            return $tunkel;
        }

        //menentukan Zakat 
        public function setZakatProfesi($agama){
            $this->agama = $agama;
            $zakat = ($this->agama == 'Islam' && $this->setGajiPokok($this->jabatan) > 6000000) ? $this->setGajiPokok($this->jabatan) * 0.025 : 0;
            return $zakat;
        }

        //mendapatkan nilai gaji pokok yang sudah diatur pada setGajiPokok
        public function getGajiPokok(){
            return $this->setGajiPokok($this->jabatan);
        }

        //mendapatkan nilai Tunjangan Jabatan yang sudah diatur pada setTunjab
        public function getTunjab(){
            return $this->setTunjab($this->jabatan);
        }

        //mendapatkan nilai Tunkel yang sudah diatur pada setTunkel
        public function getTunkel(){
            return $this->setTunkel($this->status);
        }

        //mendapatkan nilai Zakat yang sudah diatur pada setZakatProfesi
        public function getZakatProfesi(){
            return $this->setZakatProfesi($this->agama);
        }

        //menentukan nilai gaji
        public function getGajiBersih(){
            return $this->getGajiPokok() + $this->getTunjab() + $this->getTunkel() - $this->getZakatProfesi();
        }

        //mencetak output
        public function cetak(){
            echo "NIP : ".$this->nip."<br>";
            echo "Nama : ".$this->nama."<br>";
            echo "Jabatan : ".$this->jabatan."<br>";
            echo "Agama : ".$this->agama."<br>";
            echo "Status : ".$this->status."<br>";
            echo "Gaji Pokok : ".$this->getGajiPokok()."<br>";
            echo "Tunjangan Jabatan : ".$this->getTunjab()."<br>";
            echo "Tunjangan Keluarga : ".$this->getTunkel()."<br>";
            echo "Zakat Profesi : ".$this->getZakatProfesi()."<br>";
            echo "Gaji Bersih : ".$this->getGajiBersih()."<br>";
            echo "<hr>";
            
        }
    }

?>