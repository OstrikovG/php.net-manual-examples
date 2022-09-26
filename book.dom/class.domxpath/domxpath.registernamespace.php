<?php
$xml = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<entry xmlns="http://www.w3.org/2005/Atom" xmlns:other="http://other.w3.org/other" >
        <id>uYG7-sPwjFg</id>
        <published>2009-05-17T18:29:31.000Z</published>
</entry>
EOT;

$doc = new DOMDocument;
$doc->loadXML($xml);
$xpath = new DOMXPath($doc);

$xpath->registerNamespace('atom', "http://www.w3.org/2005/Atom");

$xpath_str = '//atom:entry/atom:published/text()';

$entries = $xpath->evaluate($xpath_str);

print $entries->item(0)->nodeValue ."\n";

?>