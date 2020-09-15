<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposSuppliersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_suppliers', function (Blueprint $table) {
			$table->integer('person_id');
			$table->string('company_name');
			$table->string('agency_name');
			$table->string('account_number')->nullable();
			$table->integer('deleted')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_suppliers');
	}
}