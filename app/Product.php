<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [' title', 'description', 'images_url',
    'is_featured', 'category_id', 'price', 'rating'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
