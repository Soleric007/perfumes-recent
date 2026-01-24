<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            $order->slug = Str::slug(uniqid('orderr_'));
        });
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'address',
        'email',
        'phone',
        'state',
        'country',
        'payment_method',
        'payment_status',
        'delivery_status',
        'total_amount',
        'shipping_fee',
        'user_id',
        'order_id',
        'product_id',
        'variant_id',
        'variant_type',
        'variant_size',
        'quantity',
        'price',
    ];

    // Add relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
