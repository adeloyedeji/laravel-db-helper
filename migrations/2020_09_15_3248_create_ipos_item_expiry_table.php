<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposItemExpiryTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_item_expiry', function (Blueprint $table) {
			$table->id();
			$table->integer('item_id');
			$table->integer('location_id');
			$table->string('batch_no');
			$table->time('expiry')->default(current_timestamp());
			$table->integer('quantity')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_item_expiry');
	}
}