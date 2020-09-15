<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('admins', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('email');
			$table->string('job_title');
			$table->string('password');
			$table->integer('role_id');
			$table->integer('status')->default(1);
			$table->string('remember_token')->nullable();
			$table->string('company_name')->nullable();
			$table->string('company_email')->nullable();
			$table->string('company_phone')->nullable();
			$table->string('phone')->nullable();
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
		Schema::dropIfExists('admins');
	}
}