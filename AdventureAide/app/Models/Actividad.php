<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $table = 'actividades';
    protected $primaryKey = 'id_actividad';
    public $timestamps = false;
    protected $fillable = ['id_ciudad', 'nombre_actividad', 'descripcion', 'tipo_actividad'];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad', 'id_ciudad');
    }
}
