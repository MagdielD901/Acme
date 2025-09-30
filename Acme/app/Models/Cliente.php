<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'idCliente';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
    ];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'idCliente', 'idCliente');
    }
}
