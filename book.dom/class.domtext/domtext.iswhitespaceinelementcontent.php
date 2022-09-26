<?php

// Create a DOMText with text
$text = new DOMText('Geeksforgeeks');

// Check if whitespace is there
if(!$text->isWhitespaceInElementContent()) {
    echo 'No ! object isn\'t empty.';
} else {
    echo 'Object is empty';
}
?>