<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('pharmacists', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('position');
			$table->integer('monday');
			$table->integer('tuesday');
			$table->integer('wednesday');
			$table->integer('thursday');
			$table->integer('friday');
			$table->integer('saturday');
			$table->integer('sunday');
			$table->string('fb_url');
			$table->string('tw_url');
			$table->string('image');
			$table->string('slug');
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
		Schema::dropIfExists('pharmacists');
	}
}