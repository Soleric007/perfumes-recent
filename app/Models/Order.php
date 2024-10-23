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
        'postal_code',
        'city',
        'country',
        'payment_method',
        'payment_status',
        'delivery_status',
        'total_amount',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
