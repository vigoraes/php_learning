<?php

App::bind('config', require 'config.php');

/*$app = [];

$app['config'] = require 'config.php'; */

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

//$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

function view($name, $data = []){
	extract($data);
	return require 'views/' . $name . '.view.php';
}