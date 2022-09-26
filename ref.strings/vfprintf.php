<?php
if (!($fp = fopen('date.txt', 'w')))
    return;
$year = 2022;
$month = 12;
$day = 12;
vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));
// will write the formatted ISO date to date.txt
?>