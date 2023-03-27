<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        <p>Form input nilai</p>
        <label>Nama</label>
        <input type='text' name='nama' placeholder='masukkan nama'><br>
        <label>MataKuliah</label>
        <select name='matkul'>
            <option>------pilih Matakuliah------</option>
            <option value='html'>HTML & CSS</option>
            <option value='js'>Javascript</option>
            <option value='ui/ux'>UI/UX</option>
            <option value='php'>PHP</option>
        </select><br>
        <label>Nilai</label>
        <input type='text' name='nilai' placeholder='masukkan nilai anda'>
        <button name='proses' type='submit'>Simpan</button>
    </form>

    <?php
    error_reporting(0);

    $nama = $_POST['nama'];
    $MataKuliah = $_POST['matkul'];
    $Nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    $ket = ($nilai >=60)? 'lulus' : 'gagal';
    if($nilai >= 85 && $nilai <=100) $grade = "A";
    else if ($nilai >= 75 && $nilai <=84) $grade = "B";
    else if ($nilai >= 60 && $nilai <=74) $grade = "C";
    else if ($nilai >= 30 && $nilai <=59) $grade = "D";
    else if ($nilai >= 0 && $nilai <=29) $grade = "E";
    else $grade = "";

    switch ($grade){
        case "A" : $predikat = "Memuaskan"; break;
        case "B" : $predikat = "Bagus"; break;
        case "C" : $predikat = "Cukup"; break;
        case "D" : $predikat = "Kurang"; break;
        case "E" : $predikat = "Buruk"; break;
        default: $predikat = "";
    }
    if(isset($tombol)){
    
    ?>
        Nama Mahasiswa : <?= $nama ?>
        <br> Matakuliah : <?= $MataKuliah ?>
        <br> Nilai : <?= $nilai ?>
        <br> Keterangan : <?= $ket ?>
        <br> Grade : <?= $grade ?>
        <br> predikat : <?= $predikat ?>
    <?php } ?>
</body>
</html>