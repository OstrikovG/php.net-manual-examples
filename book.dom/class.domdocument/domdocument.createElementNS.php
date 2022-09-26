<?php
$dom = new DOMDocument("1.0","utf-8");
$element = $dom->createElementNS("http://www.example.com/XFoo", "xfoo:test", "This is the root element!");
$dom->appendChild($element);
echo $dom->saveXML();

?>