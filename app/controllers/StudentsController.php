<?php

use Selecting\Users\User;

class StudentsController extends \BaseController {

	function __construct()
	{
		$this->beforeFilter('auth.admin');
	}


	/**
	 * 列出所有的学生
	 *
	 * @return Response
	 */
	public function index()
	{
		//$students = User::all();
		//$students = User::where('role', '=', '1')->get();
		$students = User::whereRole(1)->get();

		return View::make('students.index')->withStudents($students);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
