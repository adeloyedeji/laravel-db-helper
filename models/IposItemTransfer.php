<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposItemTransfer extends Model {
	protected $table = 'ipos_item_transfer';
	protected $fillable = [
		'transfer_id', 
		'transfer_time', 
		'transfer_type', 
		'request_from_branch_id', 
		'request_to_branch_id', 
		'status', 
	];
}
