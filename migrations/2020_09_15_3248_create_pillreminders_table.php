<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePillremindersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('pillreminders', function (Blueprint $table) {
			$table->id();
			$table->string('patient_fname');
			$table->string('patient_lname');
			$table->string('phone');
			$table->string('email');
			$table->string('medicine');
			$table->integer('dose');
			$table->date('start_date');
			$table->date('end_date');
			$table->string('time');
			$table->integer('how_many_times_a_day');
			$table->string('units');
			$table->decimal('total')->nullable();
			$table->string('payment_method');
			$table->string('reminder_method');
			$table->date('expiration_date')->nullable();
			$table->string('expiration_reminder')->nullable();
			$table->string('reminder_times')->nullable();
			$table->decimal('subtotal')->nullable();
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
		Schema::dropIfExists('pillreminders');
	}
}