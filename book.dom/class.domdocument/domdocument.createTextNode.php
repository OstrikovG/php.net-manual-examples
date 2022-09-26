<?php
$dom = new DOMDocument("1.0","utf-8");
$root = $dom->createElement("root");
$textNode = $dom->createTextNode("test");
$root->appendChild($textNode);
$dom->appendChild($root);
echo $dom->saveXML();

?>