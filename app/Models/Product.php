<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'categories_id',
        'name',
        'unit_price',
        'promotion_price',
        'status',
        'description',
        'quantity',
    ];

    public $timestamps = false;

    public function detailOders()
    {
        return $this->hasMany(DetailOrder::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
