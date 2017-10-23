<?php

namespace LancheNinja\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'user_deliveryman_id',
        'total',
        'status',
    ];

    public function items()
    {
        return $this->hasMany(OderItem::class);
    }

    public function deliveryman()
    {
        return $this->belongsTo(User::class);
    }

}
