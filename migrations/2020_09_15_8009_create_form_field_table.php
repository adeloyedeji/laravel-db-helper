<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormFieldTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('form_field', function (Blueprint $table) {
			$table->id();
			$table->timestamp();
			$table->string('name');
			$table->string('type');
			$table->tinyInteger('browse');
			$table->tinyInteger('read');
			$table->tinyInteger('edit');
			$table->tinyInteger('add');
			$table->string('relation_table')->nullable();
			$table->string('relation_column')->nullable();
			$table->integer('form_id')->unsigned();
			$table->string('column_name');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('form_field');
	}
}