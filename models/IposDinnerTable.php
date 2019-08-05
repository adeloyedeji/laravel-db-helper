<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposDinnerTable extends Model {
	protected $fillable = [
		'dinner_table_id', 
		'name', 
		'status', 
		'deleted', 
	];
}
