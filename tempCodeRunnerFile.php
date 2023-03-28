<?php
$jumlah_data = count($buah2an);
$jml_kg = array_column($buah2an, 'jml');
$harga_total = array_sum($jml_kg);
$total_kg = array_sum($jml_kg);
$max_kg = max($jml_kg);
$min_kg = min($jml_kg);
$keterangan = [
    'Jumlah Data ' => $jumlah_data,
    'Total Kg ' =>$total_kg,
    'Jumlah Tertinggi '=> $max_kg,
    'Jumlah Terendah '=> $min_kg,
];