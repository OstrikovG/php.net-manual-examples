<?php
$doc = new DOMDocument();
$doc->load('../book.xml');
echo $doc->saveXML();

?>