<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
     protected $fillable = [
        'id', 'fecha','producto','cliente','unidades','total'
    ];
}
