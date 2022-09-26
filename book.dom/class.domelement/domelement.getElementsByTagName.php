<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    $name = $searchNode->nodeName;
    $value = $searchNode->nodeValue;

    echo "$name - $value\n";
}
?>