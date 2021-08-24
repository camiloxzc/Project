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

    public $search;

    public function updatingSearch() {
        $this->resetPage();
    }

    //Query Scope

    public function scopeNombre($query, $nombre)
    {
        if($nombre)
            return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopePrecio($query, $precio)
    {
        if($precio)
            return $query->where('precio', 'LIKE', "%$precio%");
    }
}
