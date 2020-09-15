<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposLaboratoryResultsSavedTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_laboratory_results_saved', function (Blueprint $table) {
			$table->id();
			$table->integer('sale_id')->default(0);
			$table->integer('item_id')->default(0);
			$table->string('category');
			$table->binary('test_comment')->nullable();
			$table->integer('line')->default(0);
			$table->integer('reference')->default(0);
			$table->integer('print_option')->default(0);
			$table->binary('test_name');
			$table->binary('test_unit')->nullable();
			$table->binary('extra_name')->nullable();
			$table->binary('o_name')->nullable();
			$table->binary('h_name')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_laboratory_results_saved');
	}
}