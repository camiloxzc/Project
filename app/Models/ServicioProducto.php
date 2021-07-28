<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioProducto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'cantidad',
        'estado',
        'idcategoria',
        'iddetalleserviciousuario',
    ];
    protected $primaryKey = 'idservicioproducto';
    public $timestamps = false;
}
