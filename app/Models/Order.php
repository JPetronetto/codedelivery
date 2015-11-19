<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'client_id',
        'user_deliveryman_id',
        'total',
        'status',

    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
