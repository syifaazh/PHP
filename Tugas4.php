<?php
//Array
$m1 = ['NIM'=>'2008107010001', 'Nama'=> 'Agis', 'Nilai'=>80];
$m2 = ['NIM'=>'2008107010002', 'Nama'=> 'Berly', 'Nilai'=>69];
$m3 = ['NIM'=>'2008107010003', 'Nama'=> 'Cantika', 'Nilai'=>90];
$m4 = ['NIM'=>'2008107010004', 'Nama'=> 'Deny', 'Nilai'=>83];
$m5 = ['NIM'=>'2008107010005', 'Nama'=> 'Eja', 'Nilai'=>79];
$m6 = ['NIM'=>'2008107010006', 'Nama'=> 'Fany', 'Nilai'=>43];
$m7 = ['NIM'=>'2008107010007', 'Nama'=> 'Gilang', 'Nilai'=>72];
$m8 = ['NIM'=>'2008107010008', 'Nama'=> 'Hilma', 'Nilai'=>76];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

//Menambahkan beberapa fungsi
$jumlah_mhs = count($mahasiswa);
$jumlah_nilai = array_column($mahasiswa, 'Nilai');
$total_nilai = array_sum($jumlah_nilai);
$max_nilai = max($jumlah_nilai);
$min_nilai = min($jumlah_nilai); 
$rata2_nilai = $total_nilai / $jumlah_mhs;
$keterangan = [
    'Jumlah Mahasiswa ' => $jumlah_mhs,
    'Nilai Tertinggi ' => $max_nilai,
    'Nilai Terendah ' => $min_nilai,
    'Rata-rata Nilai ' => $rata2_nilai
];


?>
<table border=1 width=50% align='center' >
    <thead>
        <br>
        <h2 align='center'>Data Nilai Mahasiswa</h2>
            <?php
            foreach($ar_judul as $judul){
            ?>
            <th bgcolor=#5f6263><?= $judul ?></th>
            <?php } ?>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach($mahasiswa as $mhs){
            $warna = $no % 2 == 1 ? 'lightgrey' : 'white'; //penambahan warna
            $ket = ($mhs['Nilai']>=60) ? 'Lulus' : 'Tidak Lulus';

            //menentukan grade menggunakan if multi kondisi
            if($mhs ['Nilai'] >=85 && $mhs['Nilai'] <= 100) $grade = 'A';
            else if($mhs ['Nilai'] >= 75 && $mhs['Nilai'] <= 84) $grade = 'B';
            else if($mhs ['Nilai'] >= 60 && $mhs['Nilai'] <= 74) $grade = 'C';
            else if($mhs ['Nilai'] >= 30 && $mhs['Nilai'] <= 59) $grade = 'D';
            else if($mhs ['Nilai'] >= 0 && $mhs['Nilai'] <= 29) $grade = 'E';
            else $grade = '';

            //menentukan predikat menggunakan switch case
            switch ($grade){
                case "A" : $predikat = "Memuaskan"; break;
                case "B" : $predikat = "Bagus"; break;
                case "C" : $predikat = "Cukup"; break;
                case "D" : $predikat = "Kurang"; break;
                case "E" : $predikat = "Buruk"; break;
                default: $predikat = "";
            }
            ?>
            <!-- pemanggilan data mahasiswa, grade , dan predikat -->
            <tr align='center' bgcolor = "<?= $warna; ?>">
                <td><?= $no ?></td>
                <td><?= $mhs['NIM'] ?></td>
                <td align='left'><?= $mhs['Nama'] ?></td>
                <td><?= $mhs['Nilai'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>

            </tr>
            <?php
            $no++; }
            ?>
    </tbody>

    <!-- Pemanggilan Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata didalam tfoot     -->
    <tfoot>
        <?php
        foreach($keterangan as $ket => $hasil){
        ?>
        <tr bgcolor='grey'>
            <th colspan=6><?= $ket ?></th>
            <th><?= $hasil ?></th>
        </tr>
        <?php } ?>
    </tfoot>
</table>