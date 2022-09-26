<?php
$default_opts = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
            "Cookie: foo=bar",
        'proxy'=>"tcp://10.54.1.39:8000"
    )
);

$default = stream_context_set_default($default_opts);

/* Sends a regular GET request to proxy server at 10.54.1.39
 * For www.example.com using context options specified in $default_opts
 */
readfile('http://www.example.com');
?>