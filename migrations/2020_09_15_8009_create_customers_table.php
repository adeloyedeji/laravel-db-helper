<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('customers', function (Blueprint $table) {
			$table->id();
			$table->string('phone_number');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('email')->nullable();
			$table->string('state')->nullable();
			$table->integer('interaction_level');
			$table->string('timestamp');
			$table->integer('action');
			$table->tinyInteger('active');
			$table->string('selected_state_id')->nullable();
			$table->string('selected_location_id')->nullable();
			$table->string('selected_dropoff_location_id')->nullable();
			$table->string('menu_ids')->nullable();
			$table->string('menu_costs')->nullable();
			$table->string('delivery_cost')->nullable();
			$table->string('pickup_address')->nullable();
			$table->string('delivery_address')->nullable();
			$table->string('reciever_number')->nullable();
			$table->text('item_description')->nullable();
			$table->string('selected_resturant_id')->nullable();
			$table->string('selected_store_id')->nullable();
			$table->string('selected_event_id')->nullable();
			$table->string('selected_ticket_id')->nullable();
			$table->string('selected_ticket_no')->nullable();
			$table->string('selected_cinema_id')->nullable();
			$table->string('selected_movie_id')->nullable();
			$table->string('selected_artisan_id')->nullable();
			$table->string('selected_service_id')->nullable();
			$table->string('item_ids')->nullable();
			$table->text('message_array')->nullable();
			$table->longText('store1')->nullable();
			$table->longText('store2')->nullable();
			$table->longText('store3')->nullable();
			$table->longText('store4')->nullable();
			$table->longText('store5')->nullable();
			$table->longText('store6')->nullable();
			$table->longText('store7')->nullable();
			$table->longText('store8')->nullable();
			$table->longText('store9')->nullable();
			$table->longText('store10')->nullable();
			$table->longText('store11')->nullable();
			$table->longText('store12')->nullable();
			$table->longText('store13')->nullable();
			$table->longText('store14')->nullable();
			$table->longText('delivery_time')->nullable();
			$table->integer('self_assessment_id')->nullable();
			$table->integer('self_assessment_question_id')->nullable();
			$table->tinyInteger('blocked')->default(0);
			$table->timestamp();
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('customers');
	}
}