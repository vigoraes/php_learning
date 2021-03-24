<?php

App::get('database')->delete('users', [
	'name' => $_POST['name']
]);

header('Location: /');