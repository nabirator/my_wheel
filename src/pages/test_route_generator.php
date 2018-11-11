<?php
use Symfony\Component\Routing;

$generator = new Routing\Generator\UrlGenerator($routes, $context);

// outputs /hello/Fabien
echo $generator->generate('hello', array('name' => 'Fabien'));
