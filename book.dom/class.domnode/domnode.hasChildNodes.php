<?php
// Create a new DOMDocument
$dom = new DOMDocument();

// Create a paragraph element
$element = $dom->createElement('p', 'GeeksforGeeks!');

// Append the child
$dom->appendChild($element);

// Check if child nodes are there
if ($dom->hasChildNodes()) {
    echo "Yes, child nodes are there.";
}
?>