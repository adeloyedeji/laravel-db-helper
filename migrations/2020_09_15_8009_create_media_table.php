<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('media', function (Blueprint $table) {
			$table->id();
			$table->string('model_type');
			$table->bigInteger('model_id')->unsigned();
			$table->string('collection_name');
			$table->string('name');
			$table->string('file_name');
			$table->string('mime_type')->nullable();
			$table->string('disk');
			$table->bigInteger('size')->unsigned();
			$table->longText('manipulations');
			$table->longText('custom_properties');
			$table->longText('responsive_images');
			$table->integer('order_column')->unsigned()->nullable();
			$table->timestamp();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('media');
	}
}