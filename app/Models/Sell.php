<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToOne(Prodcuts::class, 'id_Product');
    }
}