<?php

require 'Celana.php';

$Celana = new Celana();
$Celana->jenis = "Jeans";
$Celana->harga = "50 ribu";
$Celana->warna = "dark blue";

echo $Celana->jenis;
echo "<br>";
echo $Celana->harga;
echo "<br>";
echo $Celana->warna;
echo "<br>";
echo $Celana->fungsi();
