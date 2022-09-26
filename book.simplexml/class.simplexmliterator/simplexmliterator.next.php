<?php
$xmlIterator = new SimpleXMLIterator('<books><book>PHP Basics</book><book>XML basics</book></books>');
$xmlIterator->rewind(); // rewind to the first element
$xmlIterator->next();

var_dump($xmlIterator->current());
?>