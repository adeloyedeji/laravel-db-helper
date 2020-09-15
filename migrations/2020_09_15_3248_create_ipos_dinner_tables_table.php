<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposDinnerTablesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_dinner_tables', function (Blueprint $table) {
			$table->integer('dinner_table_id');
			$table->string('name');
			$table->tinyInteger('status')->default(0);
			$table->integer('deleted')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_dinner_tables');
	}
}