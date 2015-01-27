<?php

class ProfileController extends \BaseController {

	function __construct()
	{
		$this->beforeFilter('auth');
	}

	/**
	 * 根据用户的身份打开不同的视图
	 *
	 * @return Response
	 */
	public function index()
	{
		$userRole = Auth::user()->role;
		if($userRole == 0)
		{
			return View::make('profile.admin_index');
		}
		else if($userRole == 1)
		{
			return View::make('profile.index');
		}
		else
		{
			return Redirect::intended('/');
		}
	}
}