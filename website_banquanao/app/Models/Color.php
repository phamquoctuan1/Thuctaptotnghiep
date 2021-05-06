<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table="color";
    protected $primaryKey = "id";
    protected $attributes=['code' =>'#00000' ];
    public function product()
    {
        return $this->belongsTo(Product::class,'productid','id');
    }
}
