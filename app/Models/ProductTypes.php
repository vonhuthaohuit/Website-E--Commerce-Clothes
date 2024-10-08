<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypes extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'name',
    ];
    public function products(){
        return $this->hasMany(Products::class, 'type_id');
    }
}
