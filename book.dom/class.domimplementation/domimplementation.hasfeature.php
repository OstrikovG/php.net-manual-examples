<?php

$features = array(
    'Core'           => 'Core module',
    'XML'            => 'XML module',
    'HTML'           => 'HTML module',
    'Views'          => 'Views module',
    'Stylesheets'    => 'Style Sheets module',
    'CSS'            => 'CSS module',
    'CSS2'           => 'CSS2 module',
    'Events'         => 'Events module',
    'UIEvents'       => 'User interface Events module',
    'MouseEvents'    => 'Mouse Events module',
    'MutationEvents' => 'Mutation Events module',
    'HTMLEvents'     => 'HTML Events module',
    'Range'          => 'Range module',
    'Traversal'      => 'Traversal module'
);

$DOMImplementation = new DOMImplementation();

foreach ($features as $key => $name) {
    if ($DOMImplementation->hasFeature($key, '2.0')) {
        echo "Has feature $name\n";
    } else {
        echo "Missing feature $name\n";
    }
}

?>