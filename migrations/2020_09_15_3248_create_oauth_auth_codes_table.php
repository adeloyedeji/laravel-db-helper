<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthAuthCodesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('oauth_auth_codes', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->integer('client_id');
			$table->text('scopes')->nullable();
			$table->tinyInteger('revoked');
			$table->time('expires_at')->nullable();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('oauth_auth_codes');
	}
}