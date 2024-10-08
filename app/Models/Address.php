<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(Customers::class, 'user_id','user_id');
    }






}
