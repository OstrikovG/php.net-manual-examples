<?php

// Create a new DOM Document
$dom = new DOMDocument('1.0', 'iso-8859-1');

// Create a div element
$element = $dom->appendChild(new DOMElement('div'));

// Create a DOMCdataSection
$text = $element->appendChild(
    new DOMCdataSection('My DOM Characters'));

// Replace the data
$text->replaceData(0, 2, 'My Replaced');

echo $dom->saveXML();
?>