<?php

/*$router->define ([
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'about/culture' => 'controllers/about-culture.php',
	'contact' => 'controllers/contact.php',
	'names' => 'controllers/add-name.php' //only for post types
]);*/


$router->get('', 'pageController@home');
$router->get('about', 'pageController@about');
$router->get('about/culture', 'pageController@aboutCulture');
$router->get('contact', 'pageController@contact');
$router->get('users', 'usersController@index');

$router->post('names', 'usersController@store');
$router->post('delete', 'usersController@remove');