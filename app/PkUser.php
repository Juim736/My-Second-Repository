<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PkUser extends Model
{
     protected $fillable = [
        'first_name', 'last_name', 'password','mobile','union','blood', 
    ];
}
