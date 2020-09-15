<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposStockLocationsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_stock_locations', function (Blueprint $table) {
			$table->integer('location_id');
			$table->string('location_name')->nullable();
			$table->text('location_address')->nullable();
			$table->string('location_number')->nullable();
			$table->string('location_email')->nullable();
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
		Schema::dropIfExists('ipos_stock_locations');
	}
}