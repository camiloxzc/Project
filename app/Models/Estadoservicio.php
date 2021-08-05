<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadoservicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'estadoservicio',
    ];
    protected $primaryKey = 'idestadoservicio';
}
