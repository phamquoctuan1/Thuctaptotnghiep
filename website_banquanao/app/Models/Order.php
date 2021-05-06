<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="order";
    protected $primaryKey = "id";

    public function product()
    {
        return $this->belongsToMany(Product::class,'order_product','orderid','productid');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'Customerid','id');
    }
}
