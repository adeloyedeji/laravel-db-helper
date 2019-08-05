<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemKitItem extends Model {
	protected $fillable = [
		'item_kit_id', 
		'item_id', 
		'quantity', 
		'kit_sequence', 
	];
}
