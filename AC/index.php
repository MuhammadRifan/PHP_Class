<?php

require 'AC.php';

$AC = new AC();
$AC->panjang = "1 meter";
$AC->lebar = "1 meter";
$AC->merk = "Sharp";

echo $AC->panjang;
echo "<br>";
echo $AC->lebar;
echo "<br>";
echo $AC->merk;
echo "<br>";
echo $AC->fungsi();
