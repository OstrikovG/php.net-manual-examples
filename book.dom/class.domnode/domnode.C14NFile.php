<?php
$d = new DOMDocument('1.0');
$d->loadXML('<foo></foo>');
$n = $d->createElement('bar');
var_dump($n->C14N());
$d->documentElement->appendChild($n);
var_dump($n->C14NFile('../../test.xml'));
?>