<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );
var_dump($xmlDoc->getElementById(1)); // NULL because ID was not declared as type ID

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttribute('ID')) {
        $attributeNode = $searchNode->getAttributeNode('ID');
        $searchNode->setIdAttributeNode($attributeNode,  true);
    }
}

echo $xmlDoc->getElementById(1)->textContent;
?>