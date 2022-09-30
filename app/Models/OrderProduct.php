<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    public function order() {
        return $this->belongsTo(Order::class,'id','order_id');
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
