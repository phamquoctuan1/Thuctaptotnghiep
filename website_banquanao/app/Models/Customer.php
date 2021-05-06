<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table="customer";
    protected $primaryKey = "id";

    public function user()
    {
        return $this->belongsTo(User::class,'usersid','id');
    }
    public function order()
    {
        return $this->hasMany(Order::class,'Customerid','id');
    }

}
