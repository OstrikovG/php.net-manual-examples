<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($attributeNode = $searchNode->getAttributeNode('ID')) {
        $value = $attributeNode->value;
        $name = $attributeNode->name;

        echo "$name - $value\n";
    }
}
?>