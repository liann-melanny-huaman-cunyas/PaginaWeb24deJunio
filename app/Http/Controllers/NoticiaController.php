<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;


class NoticiaController extends Controller
{

    public function index()
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
        return view('listadonoticias', compact('noticia'));
    }


    public function edit($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('listadonoticias', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
        $noticia = Noticia::findOrFail($id);

        // Valida los datos enviados en el formulario de edición
        $validatedData = $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
            'fecha' => 'required',
            'foto' => 'image'
        ]);

        // Actualiza los datos de la noticia en la base de datos
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

        return redirect()->route('listadonoticias');
    }


    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect()->route('listadonoticias');
    }
}



