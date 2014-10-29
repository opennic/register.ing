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
			$table->integer('domainID');
			$table->integer('recordID', true);
			$table->string('recordName', 64)->index('recordname');
			$table->string('recordType', 6);
			$table->string('recordValue', 96);
			$table->index(['domainID','recordType'], 'domainID');
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
