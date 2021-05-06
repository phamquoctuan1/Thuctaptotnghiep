<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Images extends Model
{
    use HasFactory;


    protected $casts = ['name'=>'array'];
    protected $table="image";
    protected $primaryKey = "id";
    protected $fillable = ['url','name'];
    public function product()
    {
        return $this->belongsTo(Product::class,'imageable_id','id');
    }

}
