<?php
$n = $_GET['n'];
$d = $_GET['d'];
$t = $_GET['t'];

//Hitung Luas Tabung

$jari = $d/2;
$phi = 3.14;
$luas = 2*$phi*$jari*($jari+$t);

//Hasil
echo "Luas tabung $n dengan diameter $d dan tinggi $t adalah $luas satuan luas"

?>