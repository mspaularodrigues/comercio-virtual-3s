<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoProduct extends Model
{
    protected $table = 'infoProduct';

protected $fillable = ['ingredientes', 
    'recomendacao_uso', 
    'modo_preparo', 
    'advertencia', 
    'alergenicos',
    'tamanho',
    'product_id'
];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}



