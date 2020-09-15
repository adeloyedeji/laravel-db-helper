<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposItemKitsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_item_kits', function (Blueprint $table) {
			$table->integer('item_kit_id');
			$table->string('name');
			$table->integer('item_id')->default(0);
			$table->decimal('kit_discount_percent')->default(0.00);
			$table->tinyInteger('price_option')->default(0);
			$table->tinyInteger('print_option')->default(0);
			$table->string('description');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_item_kits');
	}
}