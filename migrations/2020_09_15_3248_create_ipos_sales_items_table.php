<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposSalesItemsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_sales_items', function (Blueprint $table) {
			$table->id();
			$table->integer('sale_id')->default(0);
			$table->integer('item_id')->default(0);
			$table->string('description')->nullable();
			$table->string('serialnumber')->nullable();
			$table->integer('line')->default(0);
			$table->string('apply_vat')->default(NO);
			$table->decimal('vat')->default(0.00);
			$table->decimal('quantity_purchased')->default(0.000);
			$table->decimal('item_cost_price');
			$table->decimal('item_unit_price');
			$table->decimal('discount_percent')->default(0.00);
			$table->integer('item_location');
			$table->tinyInteger('print_option')->default(0);
			$table->string('qty_selected')->nullable();
			$table->integer('reference')->nullable();
			$table->integer('pack')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_sales_items');
	}
}