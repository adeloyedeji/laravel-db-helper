<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposSalesSuspendedItemsTaxesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_sales_suspended_items_taxes', function (Blueprint $table) {
			$table->integer('sale_id');
			$table->integer('item_id');
			$table->integer('line')->default(0);
			$table->string('name');
			$table->decimal('percent');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_sales_suspended_items_taxes');
	}
}