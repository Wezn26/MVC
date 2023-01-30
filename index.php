<?php

require './autoload.php';

session_start();

$router = new \App\core\Router();
$router->run();
