<?php
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

/* Tugas
1. Buat grade
2. Buat keterangan Jumlah mhs, nilai tertinggi, nilai terendah, rata2
3. Buat predikat dari nilai menggunakan switch case
*/

?>
<table border=1 width=100%>
    <thead>
        <?php
        foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php } ?>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach($mahasiswa as $mhs){
            $ket = ($mhs['Nilai']>=60) ? 'Lulus' : 'Tidak Lulus';
            //grade
            if($mhs ['Nilai'] >=85 && $mhs['Nilai'] <= 100) $grade = 'A';
            else if($mhs ['Nilai'] >= 75 && $mhs['Nilai'] <= 84) $grade = 'B';
            else if($mhs ['Nilai'] >= 60 && $mhs['Nilai'] <= 74) $grade = 'C';
            else if($mhs ['Nilai'] >= 30 && $mhs['Nilai'] <= 59) $grade = 'D';
            else if($mhs ['Nilai'] >= 0 && $mhs['Nilai'] <= 29) $grade = 'E';
            else $grade = '';
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['NIM'] ?></td>
                <td><?= $mhs['Nama'] ?></td>
                <td><?= $mhs['Nilai'] ?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>

            </tr>
<?php
$no++; }
?>
    </tbody>
</table>