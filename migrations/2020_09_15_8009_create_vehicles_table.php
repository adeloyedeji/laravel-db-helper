<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('vehicles', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('vehicle_category_id')->unsigned();
			$table->string('image');
			$table->string('name');
			$table->string('brand_name');
			$table->string('partner_id');
			$table->string('plate_no');
			$table->string('engine_no');
			$table->string('longitude')->nullable();
			$table->string('latitude')->nullable();
			$table->string('vehicle_cert1')->nullable();
			$table->string('vehicle_cert2')->nullable();
			$table->string('vehicle_cert3')->nullable();
			$table->bigInteger('diver_id')->unsigned()->nullable();
			$table->tinyInteger('available')->default(1);
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
		Schema::dropIfExists('vehicles');
	}
}