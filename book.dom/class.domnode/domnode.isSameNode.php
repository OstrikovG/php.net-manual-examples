<?php

// Create a new DOMDocument
$dom = new DOMDocument();

// Create a paragraph element with a namespace
$p_element = $dom->createElementNS(
    'my_namespace', 'p', 'GeeksforGeeks');

// Append the child to DOMDocument
$dom->appendChild($p_element);

// Check if the node is same
$isSameNode = $dom->isSameNode($dom);

// Check if the namespace is default or not
if($isSameNode) {
    echo 'Yes, $dom is same to itself.';
}
?>