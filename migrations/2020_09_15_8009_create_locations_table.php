<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('locations', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('state_id')->unsigned();
			$table->string('name');
			$table->string('longitude')->nullable();
			$table->string('latitude')->nullable();
			$table->timestamp();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('locations');
	}
}