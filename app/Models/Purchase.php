<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Purchase extends Model
// {
//     use HasFactory;

//     public function products(){
//         return $this->belongsToOne(Prodcuts::class, 'id_Product');
//     }
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'id_Product',
        'cant',
        'costo',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_Product');
    }
}