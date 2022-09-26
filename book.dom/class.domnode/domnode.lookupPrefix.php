<?php

// Create a new DOMDocument instance
$document = new DOMDocument();

// Load the XML with a namespace with prefix x
$document->loadXML("<?xml version=\"1.0\"?>
    <div xmlns:x=\"my_namespace\">
        <x:h1 x:style=\"color:red;\">
         GeeksforGeeks
        </x:h1>
    </div>
");

// Get the prefix with namespace URI "my_namespace"
$prefix = $document->documentElement->lookupPrefix('my_namespace');
echo $prefix;
?>