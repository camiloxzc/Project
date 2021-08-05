<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleserviciousuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'idservicioproducto',
        'idusuario',
    ];
    protected $primaryKey = 'iddetalleserviciousuario';
}
