<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposOpenRegisterTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_open_register', function (Blueprint $table) {
			$table->integer('register_id');
			$table->integer('employeeID');
			$table->timestamp('time_started')->default(current_timestamp());
			$table->date('date_entered');
			$table->integer('status')->default(1);
			$table->decimal('balance_entered');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_open_register');
	}
}