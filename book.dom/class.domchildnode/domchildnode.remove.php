<?php

// Create a new DOM Document
$dom = new DOMDocument('1.0', 'iso-8859-1');

// Create a div element
$element = $dom->appendChild(new DOMElement('div'));

$documentFragment1 = $dom->createDocumentFragment();
$documentFragment1->appendXML('<small>small text</small>');
$documentFragment1Node = $element->appendChild($documentFragment1);
echo $dom->saveXML();

// Remove the data
$documentFragment1Node->remove();
echo $dom->saveXML();
?>