<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table="size";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'amount'];
    public function product()
    {
        return $this->belongsTo(Product::class,'productid','id');
    }
}
