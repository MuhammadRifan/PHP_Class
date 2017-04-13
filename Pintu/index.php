<?php

require 'Pintu.php';

$pintu = new Pintu();
$pintu->gagang = "Terbuat dari aluminium";
$pintu->kunci = "Kunci dengan model terbaru";
$pintu->bahan = "Terbuat dari kayu jati";

echo $pintu->gagang;
echo "<br>";
echo $pintu->kunci;
echo "<br>";
echo $pintu->bahan;
echo "<br>";
echo $pintu->fungsi();


