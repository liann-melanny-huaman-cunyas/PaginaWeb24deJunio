<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = ['grado', 'seccion', 'curso', 'bimestre','ruta_pdf'];

    public function getRutaPdfAttribute($value)
    {
        return $value;
    }
}