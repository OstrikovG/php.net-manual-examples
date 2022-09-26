<?php

$doc = new DomDocument;
// We need to validate our document before referring to the id
$doc->validateOnParse = true;
$doc->load('../book.xml');
echo $doc->getElementById('listing')->tagName;

?>