<?php

// Create a new DOM Document
$dom = new DOMDocument('1.0', 'iso-8859-1');

// Create a div element
$element = $dom->appendChild(new DOMElement('div'));

$content = 'My DOM Data Section';
// Create a DOMCdataSection
$text = $element->appendChild(
    new DOMCdataSection($content));

// Insert the data
$text->insertData(strlen($content), ' with new inserted data');

echo $dom->saveXML();
?>