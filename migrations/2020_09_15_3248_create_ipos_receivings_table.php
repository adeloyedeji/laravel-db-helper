<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposReceivingsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_receivings', function (Blueprint $table) {
			$table->timestamp('receiving_time')->default(current_timestamp());
			$table->integer('supplier_id')->nullable();
			$table->integer('employee_id')->default(0);
			$table->text('comment');
			$table->integer('receiving_id');
			$table->string('payment_type')->nullable();
			$table->string('reference')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_receivings');
	}
}