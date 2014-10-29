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
			$table->integer('domainID', true);
			$table->string('domain', 64);
			$table->integer('tldID');
			$table->integer('userID')->index('userID');
			$table->integer('registerTime')->default(0)->index('registerTime');
			$table->integer('useRemote')->default(1);
			$table->boolean('needsUpdate')->default(1)->index('needsUpdate');
			$table->unique(['domain','tldID'], 'domain');
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
