<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposSalesPaymentsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_sales_payments', function (Blueprint $table) {
			$table->id();
			$table->integer('sale_id');
			$table->string('payment_type');
			$table->decimal('payment_amount');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_sales_payments');
	}
}