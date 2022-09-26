<?php

if ($stream = fopen('http://www.example.com', 'r')) {
    // print all the page starting at the offset 10
    echo stream_get_contents($stream, -1, 10);

    fclose($stream);
}


if ($stream = fopen('http://www.example.net', 'r')) {
    // print the first 5 bytes
    echo stream_get_contents($stream, 5);

    fclose($stream);
}

?>