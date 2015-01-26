<?php

class SessionsController extends \BaseController {

	function __construct()
	{
		$this->beforeFilter('guest', ['except' => 'destroy']);
		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * 用户登入
	 *
	 * @return Response
	 */
	public function store()
	{
		$formdata = Input::only('quick_username', 'quick_password');
		$logindata = array(
			'username' => $formdata['quick_username'],
			'password' => $formdata['quick_password']
		);

		if(!Auth::attempt($logindata))
		{
			Flash::error('login error');
			return Redirect::back()->withInput();
		}

		Flash::success('login success');
		return Redirect::home();
	}

	/**
	 * 用户登出
	 * @return \Illuminate\Http\RedirectResponse
     */
	public function destroy()
	{
		Auth::logout();
		return Redirect::home();
	}
}
