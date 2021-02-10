<?php

namespace App;

use App\OrderItems;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(OrderItems::class);
    }
}
