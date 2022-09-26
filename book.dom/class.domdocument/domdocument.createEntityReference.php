<?php
$dom = new DOMDocument("1.0","utf-8");
$example = $dom->createElement("example","This is copyright ");
$entity = $dom->createEntityReference("copy");
$example->appendChild($entity);
$dom->appendChild($example);
echo $dom->saveXML();

?>