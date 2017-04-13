<?php

require 'Westafel.php';

$Westafel = new Westafel();
$Westafel->panjang = "150 cm";
$Westafel->lebar = "75 cm";
$Westafel->bahan = "silver";

echo $Westafel->panjang;
echo "<br>";
echo $Westafel->lebar;
echo "<br>";
echo $Westafel->bahan;
echo "<br>";
echo $Westafel->fungsi();

