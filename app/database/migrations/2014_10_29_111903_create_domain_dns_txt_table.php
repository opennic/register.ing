<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainDnsTxtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domain_dns_txt', function(Blueprint $table)
		{
			$table->integer('domainID')->index('domainID');
			$table->integer('textID', true);
			$table->string('text', 256);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('domain_dns_txt');
	}

}
