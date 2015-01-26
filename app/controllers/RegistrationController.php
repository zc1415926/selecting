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
		$this->beforeFilter('guest');
		$this->beforeFilter('csrf', array('on'=>'post'));
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

		Flash::message('成功添加了一个用户！');

		return Redirect::home();
	}
}
