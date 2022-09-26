<?php
$xmlIterator = new SimpleXMLIterator('<books><book>PHP Basics</book><book>XML Basics</book></books>');
$xmlIterator->rewind();

var_dump($xmlIterator->current());
?>