<?php

// Create a new DOM Document
$dom = new DOMDocument('1.0', 'iso-8859-1');

// Create a div element
$element = $dom->appendChild(new DOMElement('div'));

$documentFragment1 = $dom->createDocumentFragment();
$documentFragment1->appendXML('<small>small text</small>');
$documentFragment1Node = $element->appendChild($documentFragment1);
echo $dom->saveXML();

// Replace the data
$documentFragment2 = $dom->createDocumentFragment();
$documentFragment2->appendXML('<em>emphasized text</em>');
$documentFragment1Node->replaceWith($documentFragment2);
echo $dom->saveXML();
?>