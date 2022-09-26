<?php

$domDocument = new DOMDocument('1.0', "utf-8");
$domElement = $domDocument->createElement('field','some random data');
$domAttribute = $domDocument->createAttribute('name');

// Value for the created attribute
$domAttribute->value = 'attributevalue';

// Don't forget to append it to the element
$domElement->appendChild($domAttribute);

// Append it to the document itself
$domDocument->appendChild($domElement);

echo $domDocument->saveXML();/* <?xml version="1.0" encoding="UTF-8"?><field name="attributevalue">some random data</field> */

?>