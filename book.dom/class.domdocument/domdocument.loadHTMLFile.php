<?php
$doc = new DOMDocument();
$doc->loadHTMLFile("../filename.html");
echo $doc->saveHTML();

?>