<?php

require 'Headset.php';

$Headset = new Headset();
$Headset->panjang = "3 meter";
$Headset->jenis = "In-ear";
$Headset->merk = "Razer";

echo $Headset->panjang;
echo "<br>";
echo $Headset->merk;
echo "<br>";
echo $Headset->jenis;
echo "<br>";
echo $Headset->fungsi();

