<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposPillReminderTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_pill_reminder', function (Blueprint $table) {
			$table->integer('reminder_id');
			$table->string('reminder_name');
			$table->decimal('reminder_amount');
			$table->integer('reminder_value');
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
		Schema::dropIfExists('ipos_pill_reminder');
	}
}