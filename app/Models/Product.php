<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'status'];

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }

    public function commands()
    {
        return $this->hasMany(ProductCommands::class);
    }
}
