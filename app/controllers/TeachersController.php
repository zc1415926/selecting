<?php

use Laracasts\Commander\CommanderTrait;
use Laracasts\Flash\Flash;
use Selecting\Teachers\Teacher;
use Selecting\Teachers\AddTeacherForm;
use Selecting\Teachers\AddTeacherCommand;

class TeachersController extends \BaseController {

	use CommanderTrait;
	private $addTeacherForm;

	function __construct(AddTeacherForm $addTeacherForm)
	{
		$this->beforeFilter('auth.admin');
		$this->addTeacherForm = $addTeacherForm;
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
	 * 显示添加教师表单
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('teachers.create');
	}

	/**
	 * 存储教师数据
     */
	public function store()
	{
		$this->addTeacherForm->validate(Input::all());
		$this->execute(AddTeacherCommand::class);

		Flash::success('成功添加了一位教师');
		return Redirect::back();
	}
}