<?php
$dom = new DOMDocument;
$dom->load('../book.xml');
if ($dom->validate()) {
    echo "This document is valid!\n";
}
?>