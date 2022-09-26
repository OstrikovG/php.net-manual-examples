<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttribute('ID')) {
        $newValue = 'GLOBAL_REPORT_' . $searchNode->getAttribute('ID');
        $searchNode->setAttribute('ID', $newValue);
    }
}
echo $xmlDoc->saveXML();
?>