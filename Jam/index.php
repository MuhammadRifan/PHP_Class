<?php

require 'Jam.php';

$jam = new Jam();
$jam->jarum = "Tidak ada";
$jam->jenis = "Jam Digital";
$jam->bahan = "campuran antara aluminium dan kayu";

echo $jam->jarum;
echo "<br>";
echo $jam->jenis;
echo "<br>";
echo $jam->bahan;
echo "<br>";
echo $jam->fungsi();


