<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id')->withTimestamps();
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
    public function cart()
    {
        return $this->belongsToMany(Cart::class, 'products_carts', 'product_id', 'cart_id')->withTimestamps();
    }
}