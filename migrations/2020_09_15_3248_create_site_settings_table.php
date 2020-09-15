<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('site_settings', function (Blueprint $table) {
			$table->id();
			$table->string('hotline')->nullable();
			$table->string('site_name')->nullable();
			$table->string('site_email')->nullable();
			$table->text('site_address')->nullable();
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('google')->nullable();
			$table->string('pinterest')->nullable();
			$table->string('instagram')->nullable();
			$table->string('youtube')->nullable();
			$table->string('logo')->nullable();
			$table->integer('ph_prepaid_markup')->default(0);
			$table->integer('ph_postpaid_markup')->default(0);
			$table->integer('ph_prepaid_discount')->default(0);
			$table->integer('ph_postpaid_discount')->default(0);
			$table->integer('hmo_prepaid_markup')->default(0);
			$table->integer('hmo_postpaid_markup')->default(0);
			$table->integer('hmo_prepaid_discount')->default(0);
			$table->integer('hmo_postpaid_discount')->default(0);
			$table->decimal('sms_charges')->nullable();
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
		Schema::dropIfExists('site_settings');
	}
}