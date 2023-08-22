<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    use HasFactory;

    protected $table = "userPreferences";
    
    protected $fillable = [
        'user_id',
        'has_allergies',
        'allergy_type',
        'diet_type',
    ];
}