<?php
/**
 * Created by PhpStorm.
 * User: yurii
 * Date: 11/11/18
 * Time: 08:56
 */

// framework/init.php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$response = new Response();
