<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\Noticia;



use Illuminate\Http\Request;

class InicioControlller extends Controller
{
    public function index()
    {
        $comunicados = Comunicado::latest()->get();
        $noticias = Noticia::latest()->get();

        return view('inicio', compact('comunicados', 'noticias'));
    }
}
