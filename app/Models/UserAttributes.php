<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAttributes extends Model
{
 protected $fillable = [
    'cpf', 'telefone', 'user_id'
 ];
}


