<?php

$doc = new DOMDocument;
$doc->load('../book.xml');

$book = $doc->documentElement;

// we retrieve the chapter and remove it from the book
$chapter = $book->getElementsByTagName('chapter')->item(0);

$replacementNode = $doc->createElement("replacement", "This is node instead of chapter");
$book->replaceChild($replacementNode, $chapter);

echo $doc->saveXML();
?>