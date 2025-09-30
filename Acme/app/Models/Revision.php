<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $table = 'revisiones';
    protected $primaryKey = 'idRevision';

    protected $fillable = [
        'idPlano',
        'revisado_por',
        'idArquitecto',
        'fecha_revision',
        'comentarios',
    ];

    public function plano()
    {
        return $this->belongsTo(Plano::class, 'idPlano', 'idPlano');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'revisado_por', 'id');
    }

    public function arquitecto()
    {
        return $this->belongsTo(Arquitecto::class, 'idArquitecto', 'idArquitecto');
    }
}
