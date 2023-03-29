<?php
//contoh fungsi void(fungsi yang tidak mengembalikan nilai)
function salam(){
    echo 'Selamat Pagi<br>';
}
salam();

function sayHello($nama,$umur){
    echo "Hello $nama, dan umur $umur tahun <br>";
}

sayHello("Syifa",20);
sayHello("Dave",22);
sayHello("dir",17);

//fungsi mengembalikan nlai atau fungsi return
echo '<hr>';
function tambah($a,$b){
    $c = $a + $b;
    return $c;
}
$x = 10;
$y = 20;
echo 'Hasil 50 + 30 = '.tambah(50,30);
echo "<br> Hasil dari $x + $y = ".tambah($x,$y);

//rumus cek bilangan prima
echo '<hr>';
function prima($bilangan){
    $prima = true;
    for($i = 2; $i < $bilangan; $i++){
        if($bilangan % $i == 0){
            $prima = false;
            break;
        }
    }
    return $prima;
}
if(prima($bilangan = 12)){
    echo "<br>$bilangan bilangan prima ";
} else {
    echo "<br>$bilangan bukan bilangan prima";
}
?>