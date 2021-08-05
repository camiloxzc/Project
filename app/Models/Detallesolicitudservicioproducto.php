<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallesolicitudservicioproducto extends Model
{
    use HasFactory;

    protected $fillable = [
        'horainicio',
        'horafinal',
        'precio',
        'estado',
        'cantidad',
        'idservicioproducto',
        'idsolicitudservicio',
    ];
    protected $primaryKey = 'iddetallesolicitudservicioproducto';
}
