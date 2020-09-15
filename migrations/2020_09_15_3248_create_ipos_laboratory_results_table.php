<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposLaboratoryResultsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_laboratory_results', function (Blueprint $table) {
			$table->integer('sale_id');
			$table->integer('invoice_id');
			$table->timestamp('result_time')->default(current_timestamp());
			$table->integer('customer_id');
			$table->string('doctor_name');
			$table->integer('scientist')->nullable();
			$table->integer('status')->default(1);
			$table->timestamp('result_end')->default(current_timestamp());
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_laboratory_results');
	}
}