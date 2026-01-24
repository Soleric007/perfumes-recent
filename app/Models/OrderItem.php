<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    
    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer',
    ];
    
    protected $fillable = [
        'order_id',
        'product_id',
        'variant_id',        // ADD THIS
        'variant_type',      // ADD THIS
        'variant_size',      // ADD THIS
        'quantity',
        'price'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variant()
    {
        return $this->belongsTo(PerfumeVariant::class, 'variant_id');
    }
}