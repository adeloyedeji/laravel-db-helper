<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposItemKitItemsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_item_kit_items', function (Blueprint $table) {
			$table->integer('item_kit_id');
			$table->integer('item_id');
			$table->decimal('quantity');
			$table->integer('kit_sequence')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_item_kit_items');
	}
}