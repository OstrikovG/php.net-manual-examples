<?php

$doc = new DOMDocument;
$doc->formatOutput = true;

$headNode = $doc->createElement("head");
$doc->appendChild($headNode);

$titleNode = $doc->createElement("title");
$headNode->appendChild($titleNode);

$bodyNode = $doc->createElement("body");
$doc->appendChild($bodyNode);

$divNode = $doc->createElement("div", "This is element to clone");
$bodyNode->appendChild($divNode);
$cloneDivNode = $divNode->cloneNode(true);
$bodyNode->appendChild($cloneDivNode);

echo $doc->saveXML();
?>