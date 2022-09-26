<?php

$DOMImplementation = new DOMImplementation();
$document = $DOMImplementation->createDocument(null, 'html',
    $DOMImplementation->createDocumentType(
        "html",
        "-//W3C//DTD XHTML 1.0 Transitional//EN",
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
    )
);
$document->formatOutput = true;

$html = $document->documentElement;
$head = $document->createElement('head');
$title = $document->createElement('title');
$text = $document->createTextNode('Title of Page');
$body = $document->createElement('body');

$title->appendChild($text);
$head->appendChild($title);
$html->appendChild($head);
$html->appendChild($body);

echo $document->saveHTML();
?>