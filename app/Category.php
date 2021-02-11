<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }
}
