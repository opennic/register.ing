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
			$table->integer('domain_id');
			$table->integer('ns_id', true);
			$table->string('ns_name', 6);
			$table->string('ns_ip', 16);
			$table->index(['domain_id','ns_name'], 'domain_id');
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
