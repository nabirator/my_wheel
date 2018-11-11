<?php

// framework/hello.php
/** @var \Symfony\Component\HttpFoundation\Request $request */
$name = $request->get('name', 'World');
$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
