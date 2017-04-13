<?php

require 'Sepatu.php';

$Sepatu = new Sepatu();
$Sepatu->harga = "450 ribu";
$Sepatu->merk = "Nike";
$Sepatu->jenis = "Sport";

echo $Sepatu->harga;
echo "<br>";
echo $Sepatu->merk;
echo "<br>";
echo $Sepatu->jenis;
echo "<br>";
echo $Sepatu->fungsi();

