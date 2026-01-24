<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfumeVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'type',
        'size',
        'price',
        'stock',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Check if variant is in stock
     */
    public function isInStock()
    {
        return $this->stock > 0;
    }

    /**
     * Check if variant has sufficient stock
     */
    public function hasSufficientStock($quantity)
    {
        return $this->stock >= $quantity;
    }
}