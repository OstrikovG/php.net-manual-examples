<?php

$invalidEntityReference = '<nbsp';

$dom = new DOMDocument('1.0', 'iso-8859-1');
$element = $dom->appendChild(new DOMElement('root'));
try {
    $entity = $element->appendChild(new DOMEntityReference($invalidEntityReference));
} catch (DOMException $e) {
    echo $e->getMessage(); // Invalid Character Error
}
?>