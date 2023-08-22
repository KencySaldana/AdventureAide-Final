<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudades';
    protected $primaryKey = 'id_ciudad';
    public $timestamps = false;
    protected $fillable = ['nombre_ciudad'];

    public function actividades()
    {
        return $this->hasMany(Actividad::class, 'id_ciudad', 'id_ciudad');
    }

    public function hoteles()
    {
        return $this->hasMany(Hotel::class, 'id_ciudad', 'id_ciudad');
    }

    public function restaurantes()
    {
        return $this->hasMany(Restaurante::class, 'id_ciudad', 'id_ciudad');
    }
}
