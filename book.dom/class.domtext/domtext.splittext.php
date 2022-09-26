<?php

// Create the text Node
$text = new DOMText('GeeksforGeeks');

// Split the text
$splitedtext = $text->splitText(8);
echo $splitedtext->nodeValue;
?>