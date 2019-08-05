<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposTaxCategory extends Model {
	protected $fillable = [
		'tax_category_id', 
		'tax_category', 
		'tax_group_sequence', 
	];
}
