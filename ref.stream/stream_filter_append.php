<?php
/* Open a test file for reading and writing */
$fp = fopen('../test.txt', 'w+');

/* Apply the ROT13 filter to the
 * write filter chain, but not the
 * read filter chain */
stream_filter_append($fp, "string.rot13", STREAM_FILTER_WRITE);

/* Write a simple string to the file
 * it will be ROT13 transformed on the
 * way out */
fwrite($fp, "This is a test\n");

/* Back up to the beginning of the file */
rewind($fp);

/* Read the contents of the file back out.
 * Had the filter been applied to the
 * read filter chain as well, we would see
 * the text ROT13ed back to its original state */
fpassthru($fp);

fclose($fp);

/* Expected Output
   ---------------

Guvf vf n grfg

 */
?>