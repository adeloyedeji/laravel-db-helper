<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('messages', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id')->unsigned();
			$table->text('message');
			$table->integer('type')->default(1);
			$table->string('file_path')->nullable();
			$table->string('file_name')->nullable();
			$table->timestamps();
			$table->integer('status')->default(1);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('messages');
	}
}