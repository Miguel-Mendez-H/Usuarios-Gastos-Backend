<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    protected $fillable = [
        'descripcion','monto','id_usuario',
    ];

    protected $primarykey = 'id';
}
