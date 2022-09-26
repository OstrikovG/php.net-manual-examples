<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagNameNS( "http://example.org/ns", "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    $name = $searchNode->nodeName;
    $value = $searchNode->nodeValue;

    echo "$name - $value\n";
}
?>