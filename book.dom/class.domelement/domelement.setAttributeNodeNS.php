<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('report.xml');

$searchNodes = $xmlDoc->getElementsByTagName( "Report" );

foreach( $searchNodes as $searchNode )
{
    /** @var DOMElement $searchNode */
    if ($searchNode->hasAttributeNS('http://example.org/ns', 'ID')) {
        $attributeNodeNS = $searchNode->getAttributeNodeNS('http://example.org/ns', 'ID');
        $attributeNodeNS->value = 'P_REPORT_' . $attributeNodeNS->value;
        $searchNode->setAttributeNode($attributeNodeNS);
    }
}
echo $xmlDoc->saveXML();
?>