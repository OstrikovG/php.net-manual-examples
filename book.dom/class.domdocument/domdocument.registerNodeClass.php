<?php

class myElement extends DOMElement {
    function appendElement($name) {
        return $this->appendChild(new myElement($name));
    }
}

class myDocument extends DOMDocument {
    function setRoot($name) {
        return $this->appendChild(new myElement($name));
    }
}

$doc = new myDocument();
$doc->registerNodeClass('DOMElement', 'myElement');

// From now on, adding an element to another costs only one method call !
$root = $doc->setRoot('root');
$child = $root->appendElement('child');
$child->setAttribute('foo', 'bar');

echo $doc->saveXML();

?>