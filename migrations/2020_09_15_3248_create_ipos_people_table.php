<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposPeopleTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_people', function (Blueprint $table) {
			$table->string('first_name');
			$table->string('last_name');
			$table->integer('gender')->nullable();
			$table->string('phone_number');
			$table->string('email');
			$table->string('address_1');
			$table->string('address_2');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('country');
			$table->text('comments');
			$table->integer('person_id');
			$table->string('age');
			$table->time('date_of_birth')->default(current_timestamp());
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_people');
	}
}