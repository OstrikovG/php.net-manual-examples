<?php
$a = "Österreich";
$b = "Oesterreich";
$z = "Zeta";

echo setlocale(LC_ALL, 0) . PHP_EOL;
echo strcoll($a, $b) . PHP_EOL; // 116
echo strcoll($b, $a) . PHP_EOL; // -116
echo strcoll($a, $z) . PHP_EOL; // 105

echo setlocale(LC_ALL, "de_DE.UTF-8") . PHP_EOL; // de_DE.UTF-8
echo strcoll($a, $b) . PHP_EOL; // 71
echo strcoll($b, $a) . PHP_EOL; // -71
echo strcoll($a, $z) . PHP_EOL; // -3
?>