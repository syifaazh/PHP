<?php
require 'Bank.php';

//ciptakan object
$n1 = new Bank(001 , 'Siti', 30000000);
$n2 = new Bank(002, 'Ahmad', 50000000);
$n3 = new Bank(003, 'Rani', 8000000);
$n4 = new Bank(004, 'Jarjit', 13000000);
$n5 = new Bank(005, 'Mail', 70000000);

$n1 ->ambil(2500000);
$n1 ->setor(5000000);

$dataNasabah = array($n1,$n2,$n3,$n4,$n5);
foreach($dataNasabah as $data){
    $data->cetak();
}

/*$n1->cetak();
 $n2->cetak();
 $n3->cetak();
 $n4->cetak();
 $n5->cetak(); */
?>