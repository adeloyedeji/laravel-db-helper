<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIposItemsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('ipos_items', function (Blueprint $table) {
			$table->string('name');
			$table->string('category');
			$table->integer('supplier_id')->nullable();
			$table->string('item_number')->nullable();
			$table->string('description');
			$table->decimal('cost_price');
			$table->decimal('unit_price');
			$table->decimal('whole_price');
			$table->decimal('reorder_level')->default(0.000);
			$table->decimal('receiving_quantity')->default(1.000);
			$table->integer('item_id');
			$table->string('pic_filename')->nullable();
			$table->tinyInteger('allow_alt_description');
			$table->tinyInteger('is_serialized');
			$table->tinyInteger('stock_type')->default(0);
			$table->tinyInteger('item_type')->default(0);
			$table->integer('tax_category_id')->default(0);
			$table->integer('deleted')->default(0);
			$table->decimal('pack')->default(0.000);
			$table->integer('expiry_days')->default(30);
			$table->string('period');
			$table->string('custom3');
			$table->string('custom4');
			$table->string('custom5');
			$table->string('custom6');
			$table->string('custom7');
			$table->string('custom8');
			$table->string('custom9');
			$table->string('custom10');
			$table->string('slug')->nullable();
			$table->string('image1')->nullable();
			$table->string('thumb1')->nullable();
			$table->string('small1')->nullable();
			$table->string('image2')->nullable();
			$table->string('thumb2')->nullable();
			$table->string('small2')->nullable();
			$table->string('image3')->nullable();
			$table->string('thumb3')->nullable();
			$table->string('small3')->nullable();
			$table->string('image4')->nullable();
			$table->string('thumb4')->nullable();
			$table->string('small4')->nullable();
			$table->timestamps();
			$table->string('prescriptions')->default(NO);
			$table->string('grammage')->nullable();
			$table->string('formulation')->nullable();
			$table->string('shelf')->nullable();
			$table->string('company')->nullable();
			$table->string('apply_vat')->default(NO);
			$table->decimal('wholesale_price_markup')->default(0.000);
			$table->decimal('unit_price_markup')->default(0.000);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('ipos_items');
	}
}