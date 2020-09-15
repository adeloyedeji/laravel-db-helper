<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupermarketsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('supermarkets', function (Blueprint $table) {
			$table->id();
			$table->string('sku')->nullable();
			$table->integer('category_id');
			$table->integer('sub_category_id');
			$table->string('title');
			$table->bigInteger('price');
			$table->text('overview')->nullable();
			$table->text('description')->nullable();
			$table->tinyInteger('availability')->default(1);
			$table->string('slug');
			$table->string('image1')->nullable();
			$table->string('thumb1')->nullable();
			$table->string('small1')->nullable();
			$table->string('image2')->nullable();
			$table->string('thumb2')->nullable();
			$table->string('small2')->nullable();
			$table->string('image3')->nullable();
			$table->string('thumb3')->nullable();
			$table->string('small3')->nullable();
			$table->string('image4')->nullable();
			$table->string('thumb4')->nullable();
			$table->string('small4')->nullable();
			$table->timestamps();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('supermarkets');
	}
}