<?php
$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld
var_dump($foo);
$bar = 'HELLO WORLD!';
$bar = lcfirst($bar);             // hELLO WORLD!
var_dump($bar);
$bar = lcfirst(strtoupper($bar)); // hELLO WORLD!
var_dump($bar);
?>