<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'sale_id',
        'name',
        'discount',
        'start_date',
        'end_date',
    ];
    public function products(){
        return $this->hasMany(Products::class, 'sale_id');
    }
}
