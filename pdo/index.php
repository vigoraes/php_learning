<?php


$query = require "core/bootstrap.php";
/*
$router = new Router;

require 'routes.php';
*/

$uri = Request::uri();	


//require $router->direct($uri);

require Router::load('routes.php')->direct($uri);