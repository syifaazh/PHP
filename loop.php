<?php
//jika tidak menggunakan looping
echo 'Bilangan 1';
echo 'Bilangan 2';
echo '<hr>';

//menggunakan looping increment
for($x=1; $x <=10; $x++){
    echo '<br>Bilangan '.$x;
}

//menggunakan looping decrement
for($y=10; $y >=1; $y--){
    echo '<br>Angka '.$y;
}

//looping menggunakan while
echo '<hr>';
echo '<h3>looping menggunakan while</h3>';
$xz=1;
while($xz <=5){
    echo '<br> Bilangan '.$xz;
    $xz++;
}

$yz=5;
while($yz >=1){
    echo '<br> Angka '.$yz;
    $yz--;
}

?>