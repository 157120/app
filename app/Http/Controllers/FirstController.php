<?php
class FirstController extends Controller
{
	public function index()
	{
		return View::make('login');
	}
}
?>