<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPillremindersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('user_pillreminders', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->string('name');
			$table->string('time');
			$table->date('start_date');
			$table->date('end_date');
			$table->string('medicine');
			$table->integer('dose');
			$table->integer('how_many_times_a_day');
			$table->string('units');
			$table->string('phone');
			$table->string('email');
			$table->longText('note')->nullable();
			$table->decimal('amount')->nullable();
			$table->string('address')->nullable();
			$table->string('payment_reference')->nullable();
			$table->string('reminder_method');
			$table->string('payment_method');
			$table->string('status');
			$table->string('api')->nullable();
			$table->string('reference');
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
		Schema::dropIfExists('user_pillreminders');
	}
}