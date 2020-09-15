<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposItemsPushTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_items_push', function (Blueprint $table) {
			$table->id();
			$table->integer('transfer_id');
			$table->integer('item_id');
			$table->decimal('pushed_quantity');
			$table->decimal('pulled_quantity');
			$table->decimal('received_quantity');
			$table->integer('request_from_branch_id');
			$table->integer('request_to_branch_id');
			$table->decimal('unaccounted');
			$table->integer('line');
			$table->integer('reference');
			$table->integer('batch_no');
			$table->timestamp('expiry')->nullable();
			$table->decimal('item_cost_price')->default(0.00);
			$table->decimal('item_unit_price')->default(0.00);
			$table->decimal('transfer_price')->default(0.00);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_items_push');
	}
}