<?php
//membuat array scalar (satu dimensi)
$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu'];

//tampilan pada foreach harus melakukan perubahan variabel baru menggunakan as
foreach($ar_buah as $id => $buah){
    echo '<br>Tampilkan key '.$id; //menampilkan index
}

echo '<hr>';
foreach($ar_buah as $id => $buah){
    echo '<br>Tampilkan data '.$buah; //menampilkan data buah
}

?>