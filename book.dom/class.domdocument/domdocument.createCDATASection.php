<?php
$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->appendChild(new DOMElement('root'));
$cdata = $dom->createCDATASection('root value');
$element->appendChild($cdata);
echo $dom->saveXML();

?>