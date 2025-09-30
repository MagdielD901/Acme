<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = 'zonas';
    protected $primaryKey = 'idZona';

    protected $fillable = [
        'nombre_zona',
        'descripcion',
    ];
}
