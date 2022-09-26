<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );
var_dump($xmlDoc->getElementById(3)); // NULL because ID was not declared as type ID

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttributeNS('http://example.org/ns', 'ID')) {
        $searchNode->setIdAttributeNS('http://example.org/ns', 'ID', true);
    }
}

echo $xmlDoc->getElementById(3)->textContent;
?>