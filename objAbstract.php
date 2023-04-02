<?php
require_once 'Lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$l1 = new Lingkaran(78);
$p1 = new persegiPanjang (14,34);
//$s1 = new Segitiga();

$ar_data = [$l1, $p1];
foreach ($ar_data as $data){
    $data->cetak();
}
?>