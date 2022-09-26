<?php

// Write the feature name
$featureName1 = "Core";

// Check if it exists
$node1 = new DOMNode();
$isSupported1 = $node1->isSupported($featureName1, '1.0');
if ($isSupported1) {
    echo "Has feature $featureName1 module<br>";
}

// Write another feature name
$featureName2 = "XML";

// Check if it exists
$isSupported2 = $node1->isSupported($featureName2, '2.0');
if ($isSupported2) {
    echo "Has feature $featureName2 module";
}
?>