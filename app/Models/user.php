<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public function order ()
    {
        return $this->hasOne(order::class, 'id_users', 'id');
    }

    public function user_adress ()
    {
        return $this->hasOne(user_adress::class, 'id_users', 'id');
    }
}
