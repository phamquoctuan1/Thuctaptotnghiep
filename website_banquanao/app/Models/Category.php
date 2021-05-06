<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{

    use HasFactory;
    use Sluggable , NodeTrait {
        NodeTrait::replicate as replicateNode;
        Sluggable::replicate as replicateSlug;
    }
    public function replicate(array $except = null)
    {
        $instance = $this->replicateNode($except);
        (new Sluggable())->slug($instance, true);

        return $instance;
    }
    protected $hidden =[
        '_lft',
        '_rgt'
    ];
    protected $guarded = [];
    protected $table="category";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'parent_id'];
    protected $attributes=['status' =>1];
    public function sluggable(): array
    {
        return [
            'url' => [
                'source' => 'name'
            ]
        ];
    }
    public function product()
    {
        return $this->hasMany(Product::class,'categoryid','id');
    }
    }
