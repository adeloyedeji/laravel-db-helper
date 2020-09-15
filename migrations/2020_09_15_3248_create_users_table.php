<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			$table->char('name');
			$table->string('email');
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->string('password');
			$table->integer('role_id')->nullable()->default(0);
			$table->integer('status')->nullable();
			$table->string('cac_reg_numb')->nullable();
			$table->string('nationality')->nullable();
			$table->string('state')->nullable();
			$table->string('remember_token')->nullable();
			$table->string('access_token')->nullable();
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
		Schema::dropIfExists('users');
	}
}