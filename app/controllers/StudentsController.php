<?php

use Selecting\Users\User;

class StudentsController extends \BaseController {

	function __construct()
	{
		$this->beforeFilter('auth.admin');
	}


	/**
	 * 列出所有的学生
	 * withSquence是为了在列出用户表格时在第1列显示一个序号
	 * @return Response
	 */
	public function index()
	{
		//$students = User::all();
		//$students = User::where('role', '=', '1')->get();
		$students = User::whereRole(1)->get();
		$sequence = 1;

		return View::make('students.index')->withStudents($students)->withSequence($sequence);
	}
}
