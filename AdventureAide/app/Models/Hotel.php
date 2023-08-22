<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hoteles';
    protected $primaryKey = 'id_hotel';
    public $timestamps = false;
    protected $fillable = ['id_ciudad', 'nombre_hotel', 'direccion', 'estrellas', 'descripcion', 'imagen'];

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad', 'id_ciudad');
    }
}
