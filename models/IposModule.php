<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposModule extends Model {
	protected $fillable = [
		'name_lang_key', 
		'desc_lang_key', 
		'sort', 
		'module_id', 
		'icon', 
	];
}
