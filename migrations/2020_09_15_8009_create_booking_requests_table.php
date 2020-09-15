<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRequestsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('booking_requests', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('vehicle_category_id')->unsigned();
			$table->string('pickup_time')->nullable();
			$table->string('dropoff_time')->nullable();
			$table->string('pickup_location')->nullable();
			$table->string('dropoff_location')->nullable();
			$table->string('customer_name');
			$table->string('email');
			$table->string('phone_number');
			$table->string('platform');
			$table->string('type')->default(ride);
			$table->tinyInteger('seen')->default(0);
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
		Schema::dropIfExists('booking_requests');
	}
}