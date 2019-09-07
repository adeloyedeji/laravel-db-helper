<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryResultsItem extends Model {
	protected $table = 'ipos_laboratory_results_items';
	protected $fillable = [
		'sale_id', 
		'item_id', 
		'category', 
		'test_comment', 
		'line', 
		'reference', 
		'print_option', 
		'test_name', 
		'test_unit', 
		'extra_name', 
		'o_name', 
		'h_name', 
	];
}
