<?php
// Create a new DOMDocument
$dom = new DOMDocument();

$xmlString = <<<'XML'
<?xml version="1.0"?>
<root>
    <html>
        <h1 id="first" class="first" attrib="attrib_value"> Geeksforgeeks </h1>
    </html>
</root>
XML;

$dom->loadXML($xmlString);

// Get the elements
$node = $dom->getElementsByTagName('h1')[0];

// Get the 2nd attribute's value
$attribute1 = $node->attributes->item(0)->nodeName;
$attribute2 = $node->attributes->item(1)->nodeName;
$attribute3 = $node->attributes->item(2)->nodeName;
echo "$attribute1, $attribute2 and $attribute3";
?>
