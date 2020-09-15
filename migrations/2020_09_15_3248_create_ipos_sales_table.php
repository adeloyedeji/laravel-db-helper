<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposSalesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_sales', function (Blueprint $table) {
			$table->timestamp('sale_time')->default(current_timestamp());
			$table->integer('customer_id')->nullable();
			$table->integer('employee_id')->default(0);
			$table->text('comment');
			$table->string('invoice_number')->nullable();
			$table->string('quote_number')->nullable();
			$table->integer('sale_id');
			$table->tinyInteger('sale_status')->default(0);
			$table->integer('dinner_table_id')->nullable();
			$table->integer('location_id')->default(0);
			$table->decimal('sales_amount')->default(0);
			$table->string('auth_code')->nullable();
			$table->decimal('credit')->default(0.00);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_sales');
	}
}