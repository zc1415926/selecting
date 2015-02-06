<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){

		Schema::create('teachers', function(Blueprint $table){
			$table->increments('id');
			$table->string('teachername');
			$table->string('description');
			$table->timestamps();
		});

		DB::table('teachers')->insert(array(
			array(
				'teachername' => '张川',
				'description' => '一位年轻有为的老师'),
			array(
				'teachername' => '杨小梅',
				'description' => '一位很负责任的老师')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teachers');
	}

}
