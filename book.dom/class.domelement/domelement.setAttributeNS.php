<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttributeNS('http://example.org/ns','ID')) {
        $newValue = 'P_REPORT_' . $searchNode->getAttributeNS('http://example.org/ns','ID');
        $searchNode->setAttributeNS('http://example.org/ns','ID', $newValue);
    }
}
echo $xmlDoc->saveXML();
?>