<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneraldetailsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('generaldetails', function (Blueprint $table) {
			$table->id();
			$table->text('about_content');
			$table->string('about_image');
			$table->string('column1');
			$table->string('column2');
			$table->string('column3');
			$table->string('column4');
			$table->string('slider1')->nullable();
			$table->string('header1')->nullable();
			$table->string('sub_header1')->nullable();
			$table->string('slider2')->nullable();
			$table->string('header2')->nullable();
			$table->string('sub_header2')->nullable();
			$table->string('slider3')->nullable();
			$table->string('header3')->nullable();
			$table->string('sub_header3')->nullable();
			$table->string('slider4')->nullable();
			$table->string('header4')->nullable();
			$table->string('sub_header4')->nullable();
			$table->string('slider5')->nullable();
			$table->string('header5')->nullable();
			$table->string('sub_header5')->nullable();
			$table->string('slider6')->nullable();
			$table->string('header6')->nullable();
			$table->string('sub_header6')->nullable();
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
		Schema::dropIfExists('generaldetails');
	}
}