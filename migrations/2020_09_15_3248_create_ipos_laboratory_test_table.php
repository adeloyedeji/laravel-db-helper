<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposLaboratoryTestTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_laboratory_test', function (Blueprint $table) {
			$table->integer('item_id');
			$table->string('test_code');
			$table->string('test_name');
			$table->string('test_type');
			$table->decimal('test_amount');
			$table->string('test_subgroup');
			$table->string('test_kind');
			$table->integer('deleted')->default(0);
			$table->string('test_unit');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_laboratory_test');
	}
}