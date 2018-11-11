<?php

// my_wheel/index.php
require_once __DIR__.'/init.php';

// the URI being requested (e.g. /about) minus any query parameters
/** @var \Symfony\Component\HttpFoundation\Request $request */
$request->getPathInfo();

// retrieve GET and POST variables respectively
$request->query->get('foo');
$request->request->get('bar', 'default value if bar does not exist');

// retrieve SERVER variables
$request->server->get('HTTP_HOST');

// retrieves an instance of UploadedFile identified by foo
$request->files->get('foo');

// retrieve a COOKIE value
$request->cookies->get('PHPSESSID');

// retrieve an HTTP request header, with normalized, lowercase keys
$request->headers->get('host');
$request->headers->get('content_type');

$request->getMethod();    // GET, POST, PUT, DELETE, HEAD
$request->getLanguages(); // an array of languages the client accepts

// simulate a request
//$request = Request::create('/index.php?name=Fabien');

$name = $request->get('name', 'World');

// $response = new Response(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));

$response->setContent('Hello world!');
$myIp = '127.0.0.1';
if ($myIp === $request->getClientIp()) {
    // the client is a known one, so give it some more privilege
    $response->setContent('Welcome home!');
}
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

// configure the HTTP cache headers
$response->setMaxAge(10);
$response->send();
