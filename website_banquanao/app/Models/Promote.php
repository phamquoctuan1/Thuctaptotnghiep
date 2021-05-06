<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promote extends Model
{
    use HasFactory;
    protected $table="promote";
    protected $primaryKey = "id";
    protected $fillable = ['name'];
    protected $attributes = ['status'];
    public function product()
    {
        return $this->belongsTo(Product::class,'imageable_id','id');
    }

}
