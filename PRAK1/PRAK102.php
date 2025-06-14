<?php
//NIM ulun: 2310817210020, jadi make rumus lingkaran.

$jari2 = "4.2";
$tinggi = "5.4";
$panjang = "8.9";
$lebar = "14.7";

$volumetabung = pi() * $jari2 * $jari2 * $tinggi;
echo number_format($volumetabung , 3)." m3";
?>