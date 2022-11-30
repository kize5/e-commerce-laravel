<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

//    protected $table = 'categories';
//
//    protected $primaryKey = "id";
//
//    protected $fillable = ['vr_expérience', 'vr_casque'];
//
//    public function categoryModels () {
//        return $this->hasMany(category::class);
//    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
