<?php

require 'Laptop.php';

$laptop = new Laptop();
$laptop->keyboard = "Disertai numpad";
$laptop->touchpad = "Standard";
$laptop->monitor = "14 inch";

echo $laptop->keyboard;
echo "<br>";
echo $laptop->touchpad;
echo "<br>";
echo $laptop->monitor;
echo "<br>";
echo $laptop->fungsi();


