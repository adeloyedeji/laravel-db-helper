<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposReceivingsItemsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_receivings_items', function (Blueprint $table) {
			$table->id();
			$table->integer('receiving_id')->default(0);
			$table->integer('item_id')->default(0);
			$table->string('description')->nullable();
			$table->string('serialnumber')->nullable();
			$table->integer('line');
			$table->decimal('quantity_purchased')->default(0.000);
			$table->decimal('item_cost_price');
			$table->decimal('item_unit_price');
			$table->decimal('discount_percent')->default(0.00);
			$table->integer('item_location');
			$table->decimal('receiving_quantity')->default(1.000);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_receivings_items');
	}
}