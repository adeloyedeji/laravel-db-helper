<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerHospitalsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('partner_hospitals', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->string('image')->nullable();
			$table->string('image_path');
			$table->string('organization_phone');
			$table->string('organization_name');
			$table->string('cac_reg_no');
			$table->string('organization_country');
			$table->string('organization_state');
			$table->string('organization_address');
			$table->string('type')->default(prepaid);
			$table->integer('markup')->default(0);
			$table->integer('status')->default(0);
			$table->string('api')->nullable();
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
		Schema::dropIfExists('partner_hospitals');
	}
}