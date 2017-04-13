<?php

require 'Kotak.php';

$Kotak = new Kotak();
$Kotak->warna = "Hitam";
$Kotak->harga = "150 ribu";
$Kotak->merk = "Tupperware";

echo $Kotak->warna;
echo "<br>";
echo $Kotak->harga;
echo "<br>";
echo $Kotak->merk;
echo "<br>";
echo $Kotak->fungsi();

