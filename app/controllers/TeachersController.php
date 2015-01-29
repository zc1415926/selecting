<?php

use Selecting\Teachers\Teacher;

class TeachersController extends \BaseController {

	function __construct()
	{
		$this->beforeFilter('auth.admin');
	}

	/**
	 * 列出所有教师
	 *
	 * @return Response
	 */
	public function index()
	{
		$teachers = Teacher::all();

		return View::make('teachers.index')->withTeachers($teachers);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function add()
	{
		//
	}
}