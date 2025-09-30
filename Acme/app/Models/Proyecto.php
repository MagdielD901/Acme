<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $primaryKey = 'idProyecto';

    protected $fillable = [
        'nombre',
        'descripcion',
        'idCliente',
        'fecha_inicio',
        'fecha_entrega',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente', 'idCliente');
    }

    public function planos()
    {
        return $this->hasMany(Plano::class, 'idProyecto', 'idProyecto');
    }
}
