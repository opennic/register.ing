<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateErrorlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('errorlog', function(Blueprint $table)
		{
			$table->string('type', 8)->index('type');
			$table->integer('time');
			$table->string('section', 16);
			$table->text('message');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('errorlog');
	}

}
