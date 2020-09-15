<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthClientsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('oauth_clients', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id')->nullable();
			$table->string('name');
			$table->string('secret');
			$table->text('redirect');
			$table->tinyInteger('personal_access_client');
			$table->tinyInteger('password_client');
			$table->tinyInteger('revoked');
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
		Schema::dropIfExists('oauth_clients');
	}
}