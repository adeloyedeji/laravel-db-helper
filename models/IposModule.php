<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposModule extends Model {
	protected $table = 'ipos_modules';
	protected $fillable = [
		'name_lang_key', 
		'desc_lang_key', 
		'sort', 
		'module_id', 
		'icon', 
	];
}
