<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposItemTransferTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_item_transfer', function (Blueprint $table) {
			$table->integer('transfer_id');
			$table->integer('employee_id')->default(0);
			$table->timestamp('transfer_time')->default(current_timestamp());
			$table->string('transfer_type');
			$table->integer('request_from_branch_id');
			$table->integer('request_to_branch_id');
			$table->integer('status');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_item_transfer');
	}
}