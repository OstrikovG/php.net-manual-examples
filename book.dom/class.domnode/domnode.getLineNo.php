<?php
// XML dump for below example
$xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<root>
    <node />
</root>
XML;

// Create a new DOMDocument instance
$dom = new DOMDocument;

// Load the XML
$dom->loadXML($xml);

// Print where the line where the 'node' element was defined in
printf('The <node> tag is defined on line %d', $dom->getElementsByTagName('node')->item(0)->getLineNo());
?>