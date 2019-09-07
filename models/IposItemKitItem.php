<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemKitItem extends Model {
	protected $table = 'ipos_item_kit_items';
	protected $fillable = [
		'item_kit_id', 
		'item_id', 
		'quantity', 
		'kit_sequence', 
	];
}
