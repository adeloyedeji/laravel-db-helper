<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposSalesItemsTaxesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_sales_items_taxes', function (Blueprint $table) {
			$table->integer('sale_id');
			$table->integer('item_id');
			$table->integer('line')->default(0);
			$table->string('name');
			$table->decimal('percent')->default(0.0000);
			$table->tinyInteger('tax_type')->default(0);
			$table->tinyInteger('rounding_code')->default(0);
			$table->tinyInteger('cascade_tax')->default(0);
			$table->tinyInteger('cascade_sequence')->default(0);
			$table->decimal('item_tax_amount')->default(0.0000);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_sales_items_taxes');
	}
}