<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;


class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::latest()->get();
        return view('inicio', compact('noticias'));
    }

    public function listado()
    {
        $noticias = Noticia::latest()->get();
        return view('listadonoticias', compact('noticias'));
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
            $imgPath = 'img/' . $file->getClientOriginalName();
            $file->move(public_path('img'), $imgPath);
            $noticia->foto = $imgPath;
        }

        $noticia->save();

        return redirect()->route('inicio');
    }

    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('inicio', compact('noticia'));
    }

    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect()->route('noticias.index');
    }
}



