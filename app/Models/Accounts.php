<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(Customers::class, 'user_id','user_id');
    }
    public function infoAdmin(){
        return $this->hasOne(InfoAdmin::class, 'account_id');
    }

}
