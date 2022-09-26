<?php

// Create a new DOM Document
$dom = new DOMDocument('1.0', 'iso-8859-1');

// Create a div element
$element = $dom->appendChild(new DOMElement('div'));

// Create a DOMCdataSection
$text = $element->appendChild(
    new DOMCdataSection('My DOM Data Section'));

// Delete the data
$text->deleteData(0, 3);

echo $dom->saveXML();
?>