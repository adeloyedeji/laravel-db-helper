<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('appointments', function (Blueprint $table) {
			$table->id();
			$table->char('name');
			$table->text('message');
			$table->time('appointment_time');
			$table->date('appointment_date');
			$table->string('department');
			$table->string('phone')->nullable();
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
		Schema::dropIfExists('appointments');
	}
}