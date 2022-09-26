<?php

// Create the text Node with a space
$text = new DOMText('Yes Space');

// Check if whitespace is there
if($text->isElementContentWhitespace()) {
    echo 'Yes ! Whitespace is there.';
}
?>