<?php

namespace App;

use App\Category;
use App\Rate;
use App\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'unit_id',
    ];

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getRateAttribute()
    {
        return $this->rates()->latest()->first();
    }

    public function getStockAttribute()
    {
        $total = 0;
        $orderItems = $this->orders;
        foreach ($orderItems as $orderProduct) {
            $type = $orderProduct->order->type;
            if ($type == 0) {
                $total += $orderProduct->quantity;
            } else {
                $total -= $orderProduct->quantity;
            }
        }
        return $total;
    }

    public function getCostPriceAttribute()
    {
        return $this->rates()->latest()->first()->cost_price;
    }

    public function getSellingPriceAttribute()
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