<?php

class SessionsController extends \BaseController {

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
	 * Store a newly created resource in storage.
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

		//dd($logindata);
		/*if( ! Auth::attempt($formdata))
		{

		}*/
		if(!Auth::attempt($logindata))
		{
			Flash::error('login error');
			return Redirect::back()->withInput();
		}

		Flash::success('login success');
		return Redirect::home();
	}

	public function destroy()
	{
		Auth::logout();
		return Redirect::home();
	}
}
