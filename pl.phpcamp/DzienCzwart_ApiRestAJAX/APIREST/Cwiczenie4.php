<?php
// od tego momentu mnie nie było

header("Content-type: text/xml");
$list = array('jajka', 'boczek', 'cebula');
$simplexml = new SimpleXmlElement('<?xml version="1.0"?><list />');
foreach ($list as $item) {
    $simplexml->addChild('item', $item);
}
echo $simplexml->asXML();

