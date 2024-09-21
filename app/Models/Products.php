<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function brand(){
        return $this->belongsTo(Brands::class, 'brand_id');
    }
    public function images(){
        return $this->hasMany(Images::class, 'product_id');
    }

}
