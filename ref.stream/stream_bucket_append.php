<?php
/**
 * @see https://stackoverflow.com/questions/27103269/what-is-a-bucket-brigade
 */

class strtoupper_filter extends php_user_filter {
    function filter($in, $out, &$consumed, $closing)
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
            $bucket->data = strtoupper($bucket->data);
            $consumed += $bucket->datalen;
            stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON;
    }
}

stream_filter_register('strtoupper', 'strtoupper_filter');
print  file_get_contents('php://filter/read=strtoupper/resource=http://www.example.com');
?>