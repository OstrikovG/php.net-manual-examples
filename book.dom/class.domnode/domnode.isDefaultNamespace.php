<?php

// Create a new DOMDocument
$dom = new DOMDocument();

// Create a paragraph element with a namespace
$p_element = $dom->createElementNS(
    'my_namespace', 'p', 'GeeksforGeeks');

// Append the child to DOMDocument
$dom->appendChild($p_element);

// Check if the namespace is default or not
if($dom->isDefaultNamespace('my_namespace')) {
    echo 'Yes, my_namespace is the default namespace.';
}
