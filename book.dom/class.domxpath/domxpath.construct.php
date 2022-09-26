<?php

// Create a new DOMDocument instance
$document = new DOMDocument();

// Create a XML
$xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<content>
  Hello World
</content>
XML;

// Load the XML
$document->loadXML($xml);

// Create a new DOMXPath instance
$xpath = new DOMXPath($document);

// Get the element
$tbody = $document->getElementsByTagName('content')->item(0);

// Get the element with name content
$query = '//content';

// Evaluate the query
$entries = $xpath->evaluate($query, $tbody);
echo $entries[0]->nodeValue;
?>