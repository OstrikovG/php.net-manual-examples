<?php

$number = 1234.56;

// english notation (default)
var_dump($english_format_number = number_format($number));
// 1,235

// French notation
var_dump($nombre_format_francais = number_format($number, 2, ',', ' '));
// 1 234,56

$number = 1234.5678;

// english notation without thousands separator
var_dump($english_format_number = number_format($number, 2, '.', ''));
// 1234.57

?>