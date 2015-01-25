<?php

use Laracasts\Commander\CommanderTrait;
use Selecting\Users\Form\RegistrationForm;
use Selecting\Users\RegisterUserCommand;

class RegistrationController extends \BaseController {

	use CommanderTrait;
	private $registrationForm;

	function __construct(RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;
	}

	/**
	 * 生成用户注册表单 @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}


	/**
	 * 存储一个新用户
	 * @return string
     */
	public function store()
	{
		$this->registrationForm->validate(Input::all());

		$user = $this->execute(RegisterUserCommand::class);

		Auth::login($user);

		return Redirect::home();
	}
}
