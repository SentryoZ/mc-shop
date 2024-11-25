<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $fillable = ['product_id', 'index', 'is_thumbnail', 'source'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
