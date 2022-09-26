<?php
$doc = new DOMDocument;
$doc->load('../book.xml');

if ($doc->relaxNGValidate('../book.rng')) {
    echo "This document is valid!\n";
}

?>