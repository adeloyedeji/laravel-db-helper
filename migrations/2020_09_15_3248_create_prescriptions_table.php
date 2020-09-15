<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('prescriptions', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->string('name');
			$table->string('id_no');
			$table->bigInteger('phone');
			$table->string('email');
			$table->string('clinic_address')->nullable();
			$table->integer('age');
			$table->text('description');
			$table->text('response')->nullable();
			$table->bigInteger('amount')->nullable();
			$table->string('reference');
			$table->timestamps();
			$table->string('prescriber_name')->nullable();
			$table->string('prescriber_phone')->nullable();
			$table->string('clinic')->nullable();
			$table->integer('status');
			$table->string('payment_status')->default(unpaid);
			$table->string('file');
			$table->string('type');
			$table->string('hmo_name')->nullable();
			$table->string('hmo_phone')->nullable();
			$table->string('authorization_code')->nullable();
			$table->string('cheque_id')->nullable();
			$table->text('cheque_description')->nullable();
			$table->string('cheque_amount')->nullable();
			$table->string('gender');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('prescriptions');
	}
}