<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'brand_name',
        'country'
    ];
    public function products(){
        return $this->hasMany(Products::class, 'brand_id');
    }
    public $timestamps = false;

}
