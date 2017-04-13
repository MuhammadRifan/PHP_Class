<?php

require 'Helm.php';

$Helm = new Helm();
$Helm->tipe = "Full Face";
$Helm->harga = "100 ribu";
$Helm->merk = "KYT";

echo $Helm->tipe;
echo "<br>";
echo $Helm->harga;
echo "<br>";
echo $Helm->merk;
echo "<br>";
echo $Helm->fungsi();
