<?php

require 'Sendok.php';

$Sendok = new Sendok();
$Sendok->harga = "5000";
$Sendok->bahan = "stainless steel";
$Sendok->warna = "silver";

echo $Sendok->harga;
echo "<br>";
echo $Sendok->bahan;
echo "<br>";
echo $Sendok->warna;
echo "<br>";
echo $Sendok->fungsi();

