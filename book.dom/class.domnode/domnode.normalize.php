<?php

// Create a new DOMDocument instance
$document = new DOMDocument();

// Create a div element
$element = $document->
appendChild(new DOMElement('div'));

// Create a text Node
$text1 = $document->
createTextNode('GeeksforGeeks');

// Create a empty text Node
$text2 = $document->createTextNode('');

// Create another empty text Node
$text3 = $document->createTextNode('');

// Append the nodes
$element->appendChild($text1);
$element->appendChild($text2);
$element->appendChild($text3);

echo "Number of text nodes before normalization: ";
echo count($element->childNodes) . "<br>";

// Normalize the document
$document->normalize();

echo "Number of text nodes after normalization: ";
echo count($element->childNodes);
?>