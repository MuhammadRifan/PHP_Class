<?php

require 'Kaos.php';

$Kaos = new Kaos();
$Kaos->bahan = "Kain katun";
$Kaos->harga = "50 ribu";
$Kaos->warna = "putih";

echo $Kaos->bahan;
echo "<br>";
echo $Kaos->harga;
echo "<br>";
echo $Kaos->warna;
echo "<br>";
echo $Kaos->fungsi();
