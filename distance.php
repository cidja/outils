<?php
$input = $_POST['input'];

$decametre = $input / 1000;
$metres = $input / 100;
$mm = $input * 100;

echo "$input cm fait $decametre décamètres, $metres mètres, $mm millimètres";