<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => 'float',
        'discount' => 'float',
        'shippingfee' => 'float',
        'stock' => 'integer',
    ];

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount',
        'shippingfee',
        'stock',
        'image',
        'category_id',
        'scent_id',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scent()
    {
        return $this->belongsTo(Scent::class);
    }

    public function variants()
    {
        return $this->hasMany(PerfumeVariant::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug(uniqid('product_'));
        });

        static::updating(function ($product) {
            $product->slug = Str::slug(uniqid('product_'));
        });
    }
}