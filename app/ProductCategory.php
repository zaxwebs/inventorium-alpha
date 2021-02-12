<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductCategory extends Pivot
{
    //
    protected $fillable = ['product_id', 'category_id'];
}
