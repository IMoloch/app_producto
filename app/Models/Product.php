<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToOne(Category::class, 'id_Category');
    }

    public function pruchases(){
        return $this->hasMany(Purchase::class, 'id_Product');
    }

    public function sells(){
        return $this->hasMany(Sell::class, 'id_Product');
    }
}
