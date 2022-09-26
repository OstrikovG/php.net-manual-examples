<?php

// Create a new DOMDocument
$dom = new DOMDocument();

// Create a paragraph element
$element = $dom->createElement('p',
    'This is the paragraph element!');

// Set the attribute
$element->setAttribute('id', 'my_id');

// Append the child
$dom->appendChild($element);

// Get the elements
$nodeList = $dom->getElementsByTagName('p');
foreach ($nodeList as $node) {
    if($node->hasAttribute('id')) {
        echo "Yes, id attribute is there.";
    }
}
?>