<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('form', function (Blueprint $table) {
			$table->id();
			$table->timestamp();
			$table->string('name');
			$table->string('table_name');
			$table->tinyInteger('read');
			$table->tinyInteger('edit');
			$table->tinyInteger('add');
			$table->tinyInteger('delete');
			$table->integer('pagination');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('form');
	}
}