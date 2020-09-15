<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposWalletTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_wallet', function (Blueprint $table) {
			$table->id();
			$table->integer('customer_id');
			$table->decimal('amount')->default(0.00);
			$table->bigInteger('sale_id');
			$table->time('date')->default(current_timestamp());
			$table->integer('employee_id');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_wallet');
	}
}