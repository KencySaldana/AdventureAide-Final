<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelPreference extends Model
{
    protected $table = 'travelPreferences'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'quien_viajas',
        'cantidad_personas',
        'tipo_viaje',
        'lugar_hospedaje',
        'actividades_preferenciales',
        'presupuesto',
        'fecha_inicio',
        'fecha_fin',
    ];
}
