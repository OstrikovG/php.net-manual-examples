<?php
// Create a new DOMDocument
$dom = new DOMDocument();

$xmlString = <<<'XML'
<?xml version="1.0"?>
<root xmlns:p="http://example.org/ns">
    <html>
        <p:h1 p:id="first" p:class="first" p:attrib="attrib_value"> Geeksforgeeks </p:h1>
    </html>
</root>
XML;

$dom->loadXML($xmlString);
$node = $dom->getElementsByTagName('h1')[0];
echo $node->attributes->getNamedItemNS('http://example.org/ns', 'class')->nodeValue;

?>
