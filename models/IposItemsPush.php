<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemsPush extends Model {
	protected $table = 'ipos_items_push';
	protected $fillable = [
		'transfer_id', 
		'item_id', 
		'pushed_quantity', 
		'pulled_quantity', 
		'received_quantity', 
		'request_from_branch_id', 
		'request_to_branch_id', 
		'unaccounted', 
		'line', 
		'reference', 
		'batch_no', 
		'expiry', 
	];
}
