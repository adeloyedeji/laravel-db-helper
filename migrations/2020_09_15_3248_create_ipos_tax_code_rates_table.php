<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposTaxCodeRatesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_tax_code_rates', function (Blueprint $table) {
			$table->string('rate_tax_code');
			$table->integer('rate_tax_category_id');
			$table->decimal('tax_rate')->default(0.0000);
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
		Schema::dropIfExists('ipos_tax_code_rates');
	}
}