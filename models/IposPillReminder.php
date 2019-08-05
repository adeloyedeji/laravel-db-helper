<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposPillReminder extends Model {
	protected $fillable = [
		'reminder_id', 
		'reminder_name', 
		'reminder_amount', 
		'reminder_value', 
		'deleted', 
	];
}
