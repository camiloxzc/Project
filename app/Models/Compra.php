<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'preciototal',
        'iva',
        'numerofactura',
        'urlimagen',
        'idproveedor',
    ];
    protected $primaryKey = 'idcompra';
}
