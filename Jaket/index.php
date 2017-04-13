<?php

require 'Jaket.php';

$Jaket = new Jaket();
$Jaket->harga = "500 ribu";
$Jaket->merk = "Gak terkenal";
$Jaket->bahan = "kulit";

echo $Jaket->harga;
echo "<br>";
echo $Jaket->merk;
echo "<br>";
echo $Jaket->bahan;
echo "<br>";
echo $Jaket->fungsi();

