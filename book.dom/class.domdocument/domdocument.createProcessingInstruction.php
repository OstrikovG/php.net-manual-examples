<?php
$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->appendChild(new DOMElement('root'));
$xslt = $dom->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="base.xsl"');
$element->appendChild($xslt);
echo $dom->saveXML();

?>