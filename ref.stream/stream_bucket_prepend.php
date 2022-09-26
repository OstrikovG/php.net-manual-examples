<?php

class test_filter extends php_user_filter
{
    function filter($in, $out, &$consumed, $closing)
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
            stream_bucket_append($out, stream_bucket_new($this->stream, PHP_EOL . 'APPEND' . PHP_EOL . $bucket->data . PHP_EOL . 'APPEND' . PHP_EOL));
            stream_bucket_prepend($out, stream_bucket_new($this->stream, PHP_EOL . 'PREPEND' . PHP_EOL . $bucket->data . PHP_EOL . 'ENDPREPEND' . PHP_EOL)); // will be first output

        }
        return \PSFS_PASS_ON;
    }
}

stream_filter_register('test', 'test_filter');
print  file_get_contents('php://filter/read=test/resource=http://www.example.com');
?>
