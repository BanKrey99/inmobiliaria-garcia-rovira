<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoInmuble extends Model
{
    protected $table='tipo_inmubles';
    protected $fillable=[
        'nombre'
    ];
}
