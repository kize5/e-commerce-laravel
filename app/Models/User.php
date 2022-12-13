<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = ['remember'];

    public function order()
    {
        return $this->hasOne(Order::class, 'id_users', 'id');
    }

    public function user_adress()
    {
        return $this->hasOne(User_adress::class, 'id_users', 'id');
    }

    public function current_cart()
    {
        return $this
            ->hasOne(Cart::class, 'id_users')
            ->orderBy('created_at', 'desc')
            ->limit(1);
    }

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);

    }

}
