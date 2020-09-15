<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposSalesTaxesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_sales_taxes', function (Blueprint $table) {
			$table->integer('sale_id');
			$table->smallInteger('tax_type');
			$table->string('tax_group');
			$table->decimal('sale_tax_basis');
			$table->decimal('sale_tax_amount');
			$table->tinyInteger('print_sequence')->default(0);
			$table->string('name');
			$table->decimal('tax_rate');
			$table->string('sales_tax_code');
			$table->tinyInteger('rounding_code')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_sales_taxes');
	}
}