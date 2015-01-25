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
		$formdata = Input::only('username', 'password');
		if( ! Auth::attempt($formdata))
		{
			Flash::error('login error');
			Redirect::back()->withInput();
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
