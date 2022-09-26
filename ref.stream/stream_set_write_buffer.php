<?php
$fp = fopen('../test.txt', "w");
$output = 'The string that is to be written.';
if ($fp) {
    if (stream_set_write_buffer($fp, 0) !== 0) {
        echo 'changing the buffering failed';
    }
    fwrite($fp, $output);
    fclose($fp);
}
?>