<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class, 'user_id','user_id');
    }
    public function product(){
        return $this->belongsTo(Products::class, 'product_id', 'product_id');
    }


}
