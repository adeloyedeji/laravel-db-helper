<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposTaxCodesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_tax_codes', function (Blueprint $table) {
			$table->string('tax_code');
			$table->string('tax_code_name');
			$table->tinyInteger('tax_code_type')->default(0);
			$table->string('city');
			$table->string('state');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_tax_codes');
	}
}