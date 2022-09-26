<?php
$xmlIterator = new SimpleXMLIterator('<books><book>SQL Basics</book></books>');

$xmlIterator->rewind(); // rewind to the first element
var_dump($xmlIterator->valid()); // bool(true)

$xmlIterator->next(); // advance to the next element
var_dump($xmlIterator->valid()); // bool(false) because there is only one element
?>