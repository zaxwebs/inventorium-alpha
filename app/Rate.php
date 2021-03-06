<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'cost_price', 'selling_price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
