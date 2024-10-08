<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoAdmin extends Model
{
    use HasFactory;
    public function account(){
        return $this->belongsTo(Accounts::class, 'account_id','user_id');
    }
}
