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

    protected $fillable = [
        'name',
        'description',
        'unit_id'
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getRateAttribute($value)
    {
        return $this->rates()->latest()->first();
    }

    
    public function getCostPriceAttribute($value)
    {
        return $this->rates()->latest()->first()->cost_price;
    }

    public function getSellingPriceAttribute($value)
    {
        return $this->rates()->latest()->first()->selling_price;
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
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
