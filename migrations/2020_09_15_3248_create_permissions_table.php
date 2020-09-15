<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('permissions', function (Blueprint $table) {
			$table->id();
			$table->integer('role_id');
			$table->string('products_view')->default(no);
			$table->string('products_edit')->default(no);
			$table->string('products_delete')->default(no);
			$table->string('orders_view')->default(no);
			$table->string('orders_edit')->default(no);
			$table->string('orders_delete')->default(no);
			$table->string('explore_edit')->nullable()->default(no);
			$table->string('user_management')->nullable()->default(no);
			$table->string('partnerhospital_view')->nullable()->default(no);
			$table->string('partnerhospital_edit')->default(no);
			$table->string('partnerhospital_delete')->nullable()->default(no);
			$table->string('hmo_order_view')->nullable()->default(no);
			$table->string('hmo_order_edit')->nullable()->default(no);
			$table->string('hmo_order_delete')->nullable()->default(no);
			$table->string('hmo_settings_view')->nullable()->default(no);
			$table->string('hmo_settings_edit')->nullable()->default(no);
			$table->string('hmo_settings_delete')->nullable()->default(no);
			$table->string('create_account')->default(no);
			$table->string('site_settings')->default(no);
			$table->string('report_view')->default(no);
			$table->string('delivery')->nullable()->default(no);
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
		Schema::dropIfExists('permissions');
	}
}