<?php

$text = 'This is a Simple text. (s)';

// this echoes "mple text. (s)" because 'm' is matched last
echo strrchr($text, 'mi');

// this echoes "Simple text. (s)" because chars are case sensitive
echo strrchr($text, 'S');
?>