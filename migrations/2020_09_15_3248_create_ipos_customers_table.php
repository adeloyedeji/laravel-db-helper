<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposCustomersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_customers', function (Blueprint $table) {
			$table->integer('person_id');
			$table->string('company_name')->nullable();
			$table->string('account_number')->nullable();
			$table->decimal('discount_percent')->default(0.00);
			$table->integer('package_id')->nullable();
			$table->integer('points')->nullable();
			$table->integer('deleted')->default(0);
			$table->tinyInteger('staff')->default(0);
			$table->decimal('wallet')->default(0.00);
			$table->decimal('credit_limit')->default(0.00);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_customers');
	}
}