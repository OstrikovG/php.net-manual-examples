<?php
$xmlIterator = new SimpleXMLIterator('<books><book>PHP basics</book><book>XML basics</book></books>');

var_dump($xmlIterator->key());
$xmlIterator->rewind(); // rewind to the first element
var_dump($xmlIterator->key());

?>