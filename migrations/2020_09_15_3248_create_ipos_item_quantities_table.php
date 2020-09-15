<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposItemQuantitiesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_item_quantities', function (Blueprint $table) {
			$table->id();
			$table->integer('item_id');
			$table->integer('location_id');
			$table->decimal('quantity')->default(0.000);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_item_quantities');
	}
}