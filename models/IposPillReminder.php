<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposPillReminder extends Model {
	protected $table = 'ipos_pill_reminder';
	protected $fillable = [
		'reminder_id', 
		'reminder_name', 
		'reminder_amount', 
		'reminder_value', 
		'deleted', 
	];
}
