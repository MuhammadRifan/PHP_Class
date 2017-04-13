<?php

require 'Karpet.php';

$Karpet = new Karpet();
$Karpet->bahan = "Bulu Domba";
$Karpet->lebar = "5 meter";
$Karpet->panjang = "5 meter";

echo $Karpet->bahan;
echo "<br>";
echo $Karpet->lebar;
echo "<br>";
echo $Karpet->panjang;
echo "<br>";
echo $Karpet->fungsi();

