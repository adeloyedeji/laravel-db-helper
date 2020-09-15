<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposModulesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_modules', function (Blueprint $table) {
			$table->string('name_lang_key');
			$table->string('desc_lang_key');
			$table->integer('sort');
			$table->string('module_id');
			$table->string('icon')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_modules');
	}
}