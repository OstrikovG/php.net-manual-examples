<?php

class str_rot13_filter extends php_user_filter
{
    function filter($in, $out, &$consumed, $closing)
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
            stream_bucket_append($out, stream_bucket_new($this->stream, str_rot13($bucket->data)));
        }
        return \PSFS_PASS_ON;
    }
}

stream_filter_register('str_rot13', 'str_rot13_filter');
print  file_get_contents('php://filter/read=str_rot13/resource=http://www.example.com');
?>
