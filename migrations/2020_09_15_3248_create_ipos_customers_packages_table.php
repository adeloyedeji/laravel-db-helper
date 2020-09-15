<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposCustomersPackagesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_customers_packages', function (Blueprint $table) {
			$table->integer('package_id');
			$table->string('package_name')->nullable();
			$table->float('points_percent')->default(0);
			$table->integer('deleted')->default(0);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_customers_packages');
	}
}