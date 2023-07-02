<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['grado', 'seccion', 'curso', 'ruta_pdf'];

    public function getRutaPdfAttribute($value)
    {
        // Puedes modificar esta función si necesitas manipular la ruta del PDF antes de mostrarla
        return asset('pdfs/' . $value);
    }
}
