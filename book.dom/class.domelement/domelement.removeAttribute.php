<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttribute('ID')) {
        $searchNode->removeAttribute('ID');
    }
}
echo $xmlDoc->saveXML();
?>