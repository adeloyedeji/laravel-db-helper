<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposEmployeesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_employees', function (Blueprint $table) {
			$table->string('username');
			$table->string('password');
			$table->string('roles')->nullable();
			$table->integer('person_id');
			$table->integer('deleted')->default(0);
			$table->integer('hash_version')->default(2);
			$table->integer('role')->default(0);
			$table->integer('branch_id')->default(0);
			$table->string('auth_code')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_employees');
	}
}