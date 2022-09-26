<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttribute('ID')) {
        $attributeNode = $searchNode->getAttributeNode('ID');
        $searchNode->removeAttributeNode($attributeNode);
    }
}
echo $xmlDoc->saveXML();
?>