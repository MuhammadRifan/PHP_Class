<?php

require 'Galon.php';

$Galon = new Galon();
$Galon->isi = "10 liter";
$Galon->harga = "70 ribu";
$Galon->merk = "Aqua";

echo $Galon->isi;
echo "<br>";
echo $Galon->harga;
echo "<br>";
echo $Galon->merk;
echo "<br>";
echo $Galon->fungsi();
