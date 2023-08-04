<?php
require __DIR__ . '/src/PhpEnv.php';

use ysc911\PhpEnv;

$env = new PhpEnv();
$debug = $env->get('APP_DEBUG', false);
var_dump($debug);
