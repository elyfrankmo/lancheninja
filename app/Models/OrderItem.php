<?php

namespace LancheNinja\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OrderItem extends Model
{
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'qtd',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

}
