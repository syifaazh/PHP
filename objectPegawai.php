<?php
//panggil file pegawai
require 'Pegawai.php';

//instance data 
$p1 = new Pegawai(1978299, 'Alea', 'Manager', 'Islam', 'Sigle');
$p2 = new Pegawai(1978300, 'nisa', 'Asisten Manager', 'Islam', 'Menikah');
$p3 = new Pegawai(1978301, 'reno', 'Kepala Bagian', 'Kristen', 'Sigle');
$p4 = new Pegawai(1978302, 'selen', 'Staff', 'Islam', 'Sigle');
$p5 = new Pegawai(1978303, 'jaysen', 'Staff', 'Islam', 'Menikah');

//membuat array associat
$ar_data = [$p1, $p2, $p3, $p4, $p5];

//mencetak array associat
foreach ($ar_data as $data){
    $data->cetak();
}
?>