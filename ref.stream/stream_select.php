<?php
$stream1 = fopen('http://www.example.com/', 'r');
$stream2 = fopen("https://www.php.net/", 'r');

/* Prepare the read array */
$read   = array($stream1, $stream2);
$write  = NULL;
$except = NULL;
if (false === ($num_changed_streams = stream_select($read, $write, $except, 0))) {
    /* Error handling */
} elseif ($num_changed_streams > 0) {
    /* At least on one of the streams something interesting happened */
    var_dump($num_changed_streams);
}
?>