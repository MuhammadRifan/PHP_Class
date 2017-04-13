<?php

require 'Keset.php';

$Keset = new Keset();
$Keset->panjang = "50 cm";
$Keset->bahan = "katun";
$Keset->lebar = "25 cm";

echo $Keset->panjang;
echo "<br>";
echo $Keset->bahan;
echo "<br>";
echo $Keset->lebar;
echo "<br>";
echo $Keset->fungsi();

