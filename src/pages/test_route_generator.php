<?php
use Symfony\Component\Routing;

$generator = new Routing\Generator\UrlGenerator($routes, $context);

// outputs /hello/Fabien
echo $generator->generate('hello', array('name' => 'Fabien'));

echo '<br/>';
// outputs http://{sitename}/somewhere/hello/Fabien
echo $generator->generate(
    'hello',
    array('name' => 'Fabien'),
    Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL
);

echo '<br/>';
// outputs ProjectUrlMatcher class.
$dumper = new Routing\Matcher\Dumper\PhpMatcherDumper($routes);

echo '<pre>' . htmlspecialchars($dumper->dump()) . '</pre>';
