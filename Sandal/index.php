<?php

require 'Sandal.php';

$Sandal = new Sandal();
$Sandal->harga = "15 ribu";
$Sandal->merk = "Swallow";
$Sandal->warna = "Biru dan putih";

echo $Sandal->harga;
echo "<br>";
echo $Sandal->merk;
echo "<br>";
echo $Sandal->warna;
echo "<br>";
echo $Sandal->fungsi();

