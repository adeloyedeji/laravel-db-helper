<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposLaboratoryInvoiceTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_laboratory_invoice', function (Blueprint $table) {
			$table->integer('invoice_id');
			$table->timestamp('invoice_time')->default(current_timestamp());
			$table->integer('person_id');
			$table->string('doctor_name');
			$table->integer('status');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_laboratory_invoice');
	}
}