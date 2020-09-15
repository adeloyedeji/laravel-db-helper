<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposPartitionPermissionsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_partition_permissions', function (Blueprint $table) {
			$table->id();
			$table->integer('partition_id');
			$table->string('action');
			$table->integer('employee_id');
			$table->integer('grantor_id');
			$table->integer('location_id');
			$table->time('date')->default(current_timestamp());
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_partition_permissions');
	}
}