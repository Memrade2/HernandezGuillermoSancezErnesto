<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $data =['delete_at'];

    protected $fillable = [
        'product_id',
        'productName',
        'description',
        'price',
        'stok',
        'garanty',
        'seller_id',
    ];
    protected $primaryKey = 'product_id';

    public function index(){
        return view('products.index');
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class,'id');
    }
}
