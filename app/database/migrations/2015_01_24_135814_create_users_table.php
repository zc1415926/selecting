<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password')->nullable();
			$table->string('showname')->nullable();
			$table->rememberToken();
			//0->administrator 1->students
			$table->tinyInteger('role', false, true)->default(1);
			$table->timestamps();

		});

		DB::table('users')->insert(
			array(
				'username' => 'administrator',
				'password' => Hash::make('administrator'),
				'showname' => '我的名字叫管理员',
				'role' => '0'
			)
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
