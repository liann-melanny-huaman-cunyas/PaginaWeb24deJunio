<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;


class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::latest()->get();
        return view('noticias', compact('noticias'));
    }

    public function create()
    {
        return view('crearnoticias');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'required|image',
            'titulo' => 'required',
            'contenido' => 'required',
            'fecha' => 'required'
        ]);

        $noticia = new Noticia();
        $noticia->titulo = $validatedData['titulo'];
        $noticia->contenido = $validatedData['contenido'];
        $noticia->fecha = $validatedData['fecha'];

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imgPath = 'imgs/' . $file->getClientOriginalName();
            $file->move(public_path('imgs'), $imgPath);
            $noticia->foto = $imgPath;
        }

        $noticia->save();

        return redirect()->route('noticias');
    }

    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticias.show', compact('noticia'));
    }

    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect()->route('noticias.index');
    }
}



