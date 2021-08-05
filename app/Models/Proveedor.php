<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nit',
        'proveedor',
        'personacontacto',
        'correo',
        'telefono',
        'direccion',
    ];
    protected $primaryKey = 'idproveedor';
}
