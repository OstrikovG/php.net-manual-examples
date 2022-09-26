<?php

$params = array("notification" => "stream_notification_callback");
$streamContext = stream_context_create();
stream_context_set_params($streamContext, $params);
var_dump(stream_context_get_params($streamContext));
?>