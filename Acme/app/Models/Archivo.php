<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos';
    protected $primaryKey = 'idArchivo';

    protected $fillable = [
        'idPlano',
        'nombre',
        'tipo',
        'ruta',
    ];

    public function plano()
    {
        return $this->belongsTo(Plano::class, 'idPlano', 'idPlano');
    }
}
