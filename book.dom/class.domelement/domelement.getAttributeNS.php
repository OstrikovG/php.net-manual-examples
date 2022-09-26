<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttributeNS('http://example.org/ns', 'ID')) {
        echo $searchNode->getAttributeNS('http://example.org/ns', 'ID') . PHP_EOL;
    }
}
?>