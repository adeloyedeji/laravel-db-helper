<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOauthRefreshTokensTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('oauth_refresh_tokens', function (Blueprint $table) {
			$table->id();
			$table->string('access_token_id');
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
		Schema::dropIfExists('oauth_refresh_tokens');
	}
}