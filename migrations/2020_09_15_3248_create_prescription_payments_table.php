<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionPaymentsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('prescription_payments', function (Blueprint $table) {
			$table->id();
			$table->integer('prescription_id');
			$table->string('payment_type');
			$table->double('amount_paid');
			$table->integer('status');
			$table->text('status_text')->nullable();
			$table->string('receipt_name');
			$table->text('receipt_address')->nullable();
			$table->string('receipt_phone');
			$table->string('receipt_email');
			$table->date('pickup_date')->nullable();
			$table->string('pickup_time')->nullable();
			$table->timestamps();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('prescription_payments');
	}
}