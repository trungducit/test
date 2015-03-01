<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cratetablethanhvien extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_thanhvien',function(Blueprint $table){
			$table->increments('id');
			$table->string('user');
			$table->string('pass');
			$table->text('hoten');
			$table->string('gioitinh');
			$table->string('diachi');
			$table->string('email');
			$table->integer('socmt',255);
			$table->integer('dt',255);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
