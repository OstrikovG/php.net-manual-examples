<?php

$fp = fopen('../test.txt', 'w+');

stream_filter_prepend($fp, "string.rot13", STREAM_FILTER_WRITE);
stream_filter_append($fp, "string.rot13", STREAM_FILTER_WRITE);

fwrite($fp, "This is a test\n");
rewind($fp);
fpassthru($fp);

fclose($fp);
?>