<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposLaboratorySubgroupTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_laboratory_subgroup', function (Blueprint $table) {
			$table->integer('lab_subgroup_id');
			$table->string('lab_subgroup_name');
			$table->integer('deleted');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_laboratory_subgroup');
	}
}