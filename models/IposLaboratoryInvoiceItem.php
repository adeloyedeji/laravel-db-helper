<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IposLaboratoryInvoiceItem extends Model {
	protected $table = 'ipos_laboratory_invoice_items';
	protected $fillable = [
		'invoice_id', 
		'test_id', 
	];
}
