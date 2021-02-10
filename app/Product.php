<?php

namespace App;

use App\Rate;
use App\Unit;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function unit()
    {
        return $this->hasOne(Unit::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function orders()
    {
        return $this->hasMany(OrderItems::class);
    }
}
