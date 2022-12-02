<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public function user_adress(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(user_adress::class, 'id_users', 'id');
    }

    public function order(){
        return $this->belongsTo(order::class);
    }
}
