<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price','id_Category'];

    // Define the relationship with the Category model
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}


