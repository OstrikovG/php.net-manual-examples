<?php

$streamContext = stream_context_create();
stream_context_set_option($streamContext, "http", "method", "POST");
var_dump(stream_context_get_options($streamContext));
?>