<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolinea extends Model
{
    use HasFactory;
    protected $table = 'aerolineas';
    protected $primaryKey = 'id_aerolinea';
    public $timestamps = false;
    protected $fillable = ['nombre_aerolinea', 'pais_origen', 'descripcion'];
}
