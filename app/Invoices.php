<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    public function invoiceitem() {
		return $this->hasMany('App\InvoiceItem');
	}
}
