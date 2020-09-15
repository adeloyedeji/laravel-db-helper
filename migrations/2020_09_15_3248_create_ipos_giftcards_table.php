<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposGiftcardsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_giftcards', function (Blueprint $table) {
			$table->timestamp('record_time')->default(current_timestamp());
			$table->integer('giftcard_id');
			$table->string('giftcard_number')->nullable();
			$table->decimal('value');
			$table->integer('deleted')->default(0);
			$table->integer('person_id')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_giftcards');
	}
}