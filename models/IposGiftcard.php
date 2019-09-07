<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposGiftcard extends Model {
	protected $table = 'ipos_giftcards';
	protected $fillable = [
		'record_time', 
		'giftcard_id', 
		'giftcard_number', 
		'value', 
		'deleted', 
		'person_id', 
	];
}
