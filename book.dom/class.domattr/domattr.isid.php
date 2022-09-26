<?php

$doc = new DomDocument;

// We need to validate our document before referring to the id
$doc->validateOnParse = true;
$doc->Load('../book.xml');

// We retrieve the attribute named id of the chapter element
$attr = $doc->getElementsByTagName('chapter')->item(0)->getAttributeNode('id');

var_dump($attr->isId()); // bool(true)

?>