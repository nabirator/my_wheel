<?php
/**
 * Created by PhpStorm.
 * User: yurii
 * Date: 09/11/18
 * Time: 01:21
 */

// framework/index.php
$name = $_GET['name'] ?? 'World!';

header('Content-Type: text/html; charset=utf-8');

printf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));
