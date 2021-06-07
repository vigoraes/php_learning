<?php

class pageController{
	
	public function home(){

		return view('index');
	}

	public function about(){
		return view('about');
	}

	public function contact(){
		return view('contact');
	}

	public function aboutCulture(){
		return view('aboutCulture');
	}

}