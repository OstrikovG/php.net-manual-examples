<?php
$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->appendChild(new DOMElement('root'));
$documentFragment = $dom->createDocumentFragment();
$documentFragment->appendXML('<small>test</small>');
$element->appendChild($documentFragment);
echo $dom->saveXML();

?>