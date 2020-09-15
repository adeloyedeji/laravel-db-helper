<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposCustomersPointsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_customers_points', function (Blueprint $table) {
			$table->id();
			$table->integer('person_id');
			$table->integer('package_id');
			$table->integer('sale_id');
			$table->integer('points_earned');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_customers_points');
	}
}