<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];
    protected static function booted(): void
    {
        static::creating(function ($product) {
            if(auth()->check()) {
                $product->user_id = auth()->id(); // auto assign seller
            }
        });
    }

    // app/Models/Product.php
    public function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
