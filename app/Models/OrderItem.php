<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
    	'product_id',
        'order_id',
        'price',
        'qtd',

    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function deliveryMan()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
