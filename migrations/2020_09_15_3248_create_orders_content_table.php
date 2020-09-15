<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersContentTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('orders_content', function (Blueprint $table) {
			$table->id();
			$table->string('reference');
			$table->string('name');
			$table->float('price');
			$table->integer('qty');
			$table->string('picture')->nullable();
			$table->timestamps();
			$table->integer('product_id')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('orders_content');
	}
}