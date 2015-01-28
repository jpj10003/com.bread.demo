<?php

class PagesController extends BaseController {

	public function home()
	{
		$name = 'John';
		return View::make('hello')->with('name',$name);
	
	}
	
	public function about()
	{
		$name = 'Hey';
		return View::make('about')->with('name',$name);
	
	}
	
	public function nets()
	{
		$name = 'Nets Basketball!';
		return View::make('nets')->with('name',$name);
	
	
	}
}
?>