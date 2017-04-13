<?php

require 'Monitor.php';

$Monitor = new Monitor();
$Monitor->ukuran = "21 inch";
$Monitor->jenis = "IPS Screen";
$Monitor->merk = "Asus";

echo $Monitor->ukuran;
echo "<br>";
echo $Monitor->jenis;
echo "<br>";
echo $Monitor->merk;
echo "<br>";
echo $Monitor->fungsi();

