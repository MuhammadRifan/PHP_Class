<?php

require 'Saklar.php';

$Saklar = new Saklar();
$Saklar->jumlah = "1 tombol per saklar";
$Saklar->panjang = "7 cm";
$Saklar->lebar = "7 cm";

echo $Saklar->jumlah;
echo "<br>";
echo $Saklar->panjang;
echo "<br>";
echo $Saklar->lebar;
echo "<br>";
echo $Saklar->fungsi();

