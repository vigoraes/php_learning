<?php

App::get('database')->delete('users', [
	'name' => $_POST['name-delete']
]);

header('Location: /');