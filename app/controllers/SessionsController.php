<?php

//use Selecting\Users\SignInForm;

class SessionsController extends \BaseController {

	private $signInForm;

	function __construct(/*SignInForm $signInForm*/)
	{
		//除了destroy方法，其余的方法都要求以guest身份执行
		$this->beforeFilter('guest', ['except' => 'destroy']);
		//$this->signInForm = $signInForm;
	}



	/**
	 * 处理用户登录逻辑
	 *
	 * @return Response
	 */
	public function store()
	{
		$formdata = Input::only('username', 'password');
		//$this->signInForm->validate($formdata);

		if(!Auth::attempt($formdata))
		{
			Flash::error('亲，登录失败了......');
			return Redirect::back()->withInput();
		}

		Flash::success('欢迎回来');
		return Redirect::intended('/profile');
	}
}
