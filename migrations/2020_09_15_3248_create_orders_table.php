<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('orders', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id')->nullable();
			$table->string('reference');
			$table->decimal('amount');
			$table->string('discount')->nullable()->default(0);
			$table->string('name')->nullable();
			$table->string('address')->nullable();
			$table->string('pickup_date')->nullable();
			$table->string('pickup_time')->nullable();
			$table->string('prescribed_for')->nullable();
			$table->string('patient_name')->nullable();
			$table->string('patient_phone')->nullable();
			$table->string('patient_address');
			$table->text('note')->nullable();
			$table->longText('cart')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('delivery_method')->nullable();
			$table->string('location')->nullable();
			$table->string('visibility')->nullable();
			$table->string('payment_type');
			$table->string('status');
			$table->tinyInteger('delivery_status')->default(1);
			$table->decimal('delivery_price')->nullable();
			$table->string('delivery_location')->nullable();
			$table->string('transfer_id')->nullable();
			$table->string('push_id')->nullable();
			$table->integer('prescription')->nullable();
			$table->string('beneficiary_address')->nullable();
			$table->string('beneficiary_phone')->nullable();
			$table->string('beneficiary')->nullable();
			$table->string('address_2')->nullable();
			$table->string('address_3')->nullable();
			$table->integer('order_from')->default(0);
			$table->integer('delivery_assign')->nullable();
			$table->string('recipient_name')->nullable();
			$table->string('recipient_phone')->nullable();
			$table->string('recipient_address')->nullable();
			$table->string('payment_reference')->nullable();
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
		Schema::dropIfExists('orders');
	}
}