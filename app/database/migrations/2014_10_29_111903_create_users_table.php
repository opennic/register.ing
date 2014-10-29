<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->integer('userID', true);
			$table->string('username', 16)->unique('username');
			$table->text('password');
			$table->string('session_key', 32)->index('session_key');
			$table->string('firstname', 64);
			$table->string('lastname', 64);
			$table->string('email', 128);
			$table->string('display', 128);
			$table->integer('timeSeen');
		});
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
