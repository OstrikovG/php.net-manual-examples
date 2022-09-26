<?php
$doc = new DOMDocument();
$doc->loadXML('<root><node/></root>');
$doc->normalizeDocument();
echo $doc->saveXML();

?>