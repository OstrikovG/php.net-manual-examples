<?php
$dom = new DOMDocument('1.0', 'utf-8');
$element = $dom->appendChild(new DOMElement('root'));
$comment = $dom->createComment('root comment');
$element->appendChild($comment);
echo $dom->saveXML();

?>