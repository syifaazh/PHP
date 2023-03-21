<?php


//pemanggilan di php
echo 'hallo world';

//belajar variabel
$namaSiswa = 'Syifa';
$umur = 20;
$berat_badan = 55;
$_pekerjaan = 'mahasiswa';

echo '<hr/>';
echo 'Nama Siswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat Badan : '.$berat_badan;
echo '<br>Pekerjaan : '.$_pekerjaan;
?>

<!-- ini adalah pemanggilan dengan menggunakan document HTML -->
<hr>
Nama Siswa : <?= $namaSiswa ?>
<br>Umur : <?= $umur ?>
<br>Barat Badan : <?= $berat_badan ?>
<br>Pekerjaan : <?= $_pekerjaan ?>