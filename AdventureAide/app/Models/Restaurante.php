<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;
    protected $table = 'restaurantes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_ciudad', 'nombre_restaurante', 'direccion', 'tipo_cocina', 'rango_precio', 'descripcion'];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad', 'id_ciudad');
    }
}
