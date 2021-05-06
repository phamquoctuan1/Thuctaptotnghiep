<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(Product::class,'invoice_product','invoiceid','productid');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
