<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudservicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'fechasolicitud',
        'fechaservicio',
        'precio',
        'modalidad',
        'direccion',
        'idestadoservicio',
        'idusuario',
    ];
    protected $primaryKey = 'idsolicitudservicio';
    public $timestamps = false;
}
