<?php

require 'Kacamata.php';

$Kacamata = new Kacamata();
$Kacamata->harga = "165 ribu";
$Kacamata->warna = "Hitam";
$Kacamata->merk = "Yang terkenal pokoknya";

echo $Kacamata->harga;
echo "<br>";
echo $Kacamata->warna;
echo "<br>";
echo $Kacamata->merk;
echo "<br>";
echo $Kacamata->fungsi();

