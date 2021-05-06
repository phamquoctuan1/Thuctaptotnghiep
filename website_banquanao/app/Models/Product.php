<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table="product";
    protected $primaryKey = "id";
    protected $fillable = ['name','description','price', 'discount','categoryid','shortdecription'];
    protected $attributes=['status' =>1 ];
    public function sluggable(): array
    {
        return [
            'url' => [
                'source' => 'name'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'categoryid');
    }

    public function images()
    {
        return $this->hasMany(Images::class,'imageable_id','id');
    }

    public function promote()
    {
        return $this->hasMany(Promote::class,'promote_id','id');
    }
    public function size()
    {
        return $this->hasMany(Size::class,'productid','id');
    }
    public function color()
    {
        return $this->hasMany(Color::class,'productid','id');
    }

    public function order()
    {
        return $this->belongsToMany(Order::class,'order_product','orderid','productid');
    }
    public function invoice()
    {
        return $this->belongsToMany(Invoice::class,'invoice_product','invoiceid','productid');
    }
}
