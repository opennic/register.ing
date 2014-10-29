<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tlds', function(Blueprint $table)
		{
			$table->integer('tldID', true);
			$table->string('tld', 8)->index('tld');
			$table->boolean('public')->default(1)->index('public');
			$table->text('description');
			$table->text('charter');
			$table->integer('minimumChars')->default(3);
			$table->integer('maximumChars')->default(16);
			$table->integer('date');
			$table->integer('rev');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tlds');
	}

}
