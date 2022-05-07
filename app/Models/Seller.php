<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $primaryKey = 'seller_id';

    public function user()
    {
        return $this->hasOne(User::class,'id');
    }
    public function product()
    {
        return $this->hasMany(Product::class,'product_id');
    }
}
