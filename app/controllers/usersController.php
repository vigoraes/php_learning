<?php

class usersController{
	public function index(){
		$users = App::get('database')->selectAll("users");
		return view('users', compact('users'));
	}

	public function store(){
		App::get('database')->insert('users', [
		'name' => $_POST['name']
		]);

		header('Location: /users');
	}

	public function remove(){
		App::get('database')->delete('users', [
		'name' => $_POST['name-delete']
		]);

		header('Location: /users');
	}
}