<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domains', function(Blueprint $table)
		{
			$table->integer('domain_id', true);
			$table->string('domain', 64);
			$table->integer('tld_id');
			$table->integer('user_id')->index('userID');
			$table->integer('register_time')->default(0)->index('register_time');
			$table->integer('use_remote')->default(1);
			$table->boolean('needs_update')->default(1)->index('needs_update');
			$table->unique(['domain','tld_id'], 'domain');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('domains');
	}

}
