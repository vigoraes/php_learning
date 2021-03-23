<?php

/*class NamesController{

	public function addName(){

	}

}*/

$app['database']->insert('users', [
	'name' => $_POST['name']
]);

header('Location: /');