<?php

$fp = fopen('../test.txt', 'w+');

$rot13_filter = stream_filter_append($fp, "string.rot13", STREAM_FILTER_WRITE);

fwrite($fp, "This is ");
stream_filter_remove($rot13_filter);
fwrite($fp, "a test\n");

rewind($fp);
fpassthru($fp);
fclose($fp);

?>