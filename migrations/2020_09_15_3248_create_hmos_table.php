<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHmosTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('hmos', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->string('name');
			$table->string('email');
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->string('password');
			$table->string('type')->default(prepaid);
			$table->string('remember_token')->nullable();
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
		Schema::dropIfExists('hmos');
	}
}