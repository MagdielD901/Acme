<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arquitecto extends Model
{
    protected $table = 'arquitectos';
    protected $primaryKey = 'idArquitecto';

    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'especialidad',
    ];

    public function revisiones()
    {
        return $this->hasMany(Revision::class, 'idArquitecto', 'idArquitecto');
    }
}
