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
$node = $dom->getElementsByTagName('h1')[0];
echo $node->attributes->count(); // 3

?>