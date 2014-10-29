<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainDnsRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domain_dns_records', function(Blueprint $table)
		{
			$table->integer('domain_id');
			$table->integer('record_id', true);
			$table->string('record_name', 64)->index('recordname');
			$table->string('record_type', 6);
			$table->string('record_value', 96);
			$table->index(['domain_id','record_type'], 'domain_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('domain_dns_records');
	}

}
