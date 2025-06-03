<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'units', 'cep'
     ];

     public function product(){
        return $this->belongsTo(Product::class);
    }
}
