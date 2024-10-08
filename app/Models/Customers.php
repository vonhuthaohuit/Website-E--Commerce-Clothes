<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    public function address(){
        return $this->hasMany(Address::class, 'user_id');
    }
    public function account(){
        return $this->belongsTo(Accounts::class, 'user_id','user_id');
    }
}
