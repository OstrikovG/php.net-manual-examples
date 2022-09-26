<?php

$dom = new DOMDocument();
$dom->formatOutput = true;

$root = $dom->createElement("root");
$dom->appendChild($root);
$element = $dom->createElement('p', 'First element');

$node = $root->appendChild($element);
$node->parentNode->insertBefore($dom->createElement('p', 'Second element'), $node);

echo $dom->saveXML();
?>