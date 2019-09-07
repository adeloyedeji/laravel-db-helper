<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposDinnerTable extends Model {
	protected $table = 'ipos_dinner_tables';
	protected $fillable = [
		'dinner_table_id', 
		'name', 
		'status', 
		'deleted', 
	];
}
