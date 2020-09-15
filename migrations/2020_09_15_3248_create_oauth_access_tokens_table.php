<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthAccessTokensTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('oauth_access_tokens', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id')->nullable();
			$table->integer('client_id');
			$table->string('name')->nullable();
			$table->text('scopes')->nullable();
			$table->tinyInteger('revoked');
			$table->timestamps();
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
		Schema::dropIfExists('oauth_access_tokens');
	}
}