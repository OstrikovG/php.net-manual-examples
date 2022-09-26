<?php
$f = new DOMDocumentFragment();
$f->appendXML("<foo>text</foo><bar>text2</bar>"); // PHP Fatal error:  Uncaught DOMException: No Modification Allowed Error
?>