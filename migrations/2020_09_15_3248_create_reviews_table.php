<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('reviews', function (Blueprint $table) {
			$table->id();
			$table->integer('product_id')->nullable();
			$table->integer('product_item_id');
			$table->integer('user_id')->nullable();
			$table->integer('rating')->nullable();
			$table->tinyInteger('approved')->nullable();
			$table->tinyInteger('spam')->nullable();
			$table->text('comment')->nullable();
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
		Schema::dropIfExists('reviews');
	}
}