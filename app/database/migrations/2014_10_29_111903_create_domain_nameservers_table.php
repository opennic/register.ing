<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainNameserversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domain_nameservers', function(Blueprint $table)
		{
			$table->integer('domainID');
			$table->integer('nsID', true);
			$table->string('nsName', 6);
			$table->string('nsIP', 16);
			$table->index(['domainID','nsName'], 'domainID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('domain_nameservers');
	}

}
