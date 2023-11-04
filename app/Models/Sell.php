<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Sell extends Model
// {
//     use HasFactory;

//     public function products(){
//         return $this->belongsToOne(Prodcuts::class, 'id_Product');
//     }
// }

class Sell extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', // Add product_id to the $fillable array
        // Other fields you want to allow mass assignment for
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id'); // Corrected the relationship method and the foreign key
    }
}