<?php

// Create a new DOMDocument instance
$document = new DOMDocument();

// Create a div element
$element = $document->appendChild(new DOMElement('div'));

// Create a h1 element
$text1 = new DOMElement('h1', 'GeeksforGeeks');

// Create another h1 elements
$text2 = new DOMElement('h1', 'Another GeeksforGeeks');

// Append the nodes
$element->appendChild($text1);
$element->appendChild($text2);

// Get all elements with tag name 'h1'
$elements = $document->getElementsByTagName('h1');

// Get the text of first element
echo $elements->item(0)->textContent;
?>