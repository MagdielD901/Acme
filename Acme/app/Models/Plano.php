<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $table = 'planos';
    protected $primaryKey = 'idPlano';

    protected $fillable = [
        'idProyecto',
        'nombre',
        'descripcion',
        'fecha_creacion',
        'hoja',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'idProyecto', 'idProyecto');
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class, 'idPlano', 'idPlano');
    }

    public function revisiones()
    {
        return $this->hasMany(Revision::class, 'idPlano', 'idPlano');
    }
}
