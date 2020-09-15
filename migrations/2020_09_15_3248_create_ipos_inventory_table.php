<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposInventoryTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_inventory', function (Blueprint $table) {
			$table->integer('trans_id');
			$table->integer('trans_items')->default(0);
			$table->integer('trans_user')->default(0);
			$table->timestamp('trans_date')->default(current_timestamp());
			$table->text('trans_comment');
			$table->integer('trans_location');
			$table->decimal('trans_inventory')->default(0.000);
			$table->integer('trans_remaining')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_inventory');
	}
}