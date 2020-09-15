<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('notes', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->text('content');
			$table->string('note_type');
			$table->date('applies_to_date');
			$table->integer('users_id')->unsigned();
			$table->integer('status_id')->unsigned();
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
		Schema::dropIfExists('notes');
	}
}