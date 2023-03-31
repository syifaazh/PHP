<?php
require_once 'dosen.php';
require_once 'mahasiswa.php';
require_once 'staff.php';

$d1 = new Dosen ('Budi', 'L', 1111, 'M.Kom');
$d2 = new Dosen ('Andi', 'L', 1112, 'M.Kom');
$m1 = new Mahasiswa ('Randy', 'L', 3, 'Teknik Informatika');
$m2 = new Mahasiswa ('Lion', 'L', 6, 'Informatika');
$s1 = new Staff ('vano', 'L', 19786357, 'Kepala Bagian', 10000000);
$s2 = new Staff ('lani', 'P', 19790359, 'Sekretaris Manager', 15000000);

$ar_data = [$d1, $d2, $m1, $m2, $s1, $s2];

foreach ($ar_data as $data){
    $data->cetak();
}
?>