<?php

// my_wheel/index.php
require_once __DIR__.'/init.php';

// the URI being requested (e.g. /about) minus any query parameters
/** @var \Symfony\Component\HttpFoundation\Request $request */
$name = $request->get('name', 'World');

$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
$response->send();
