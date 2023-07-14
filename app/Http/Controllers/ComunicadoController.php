<?php

namespace App\Http\Controllers;
use App\Models\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    public function index()
    {
        $comunicados = Comunicado::latest()->get();
        return view('inicio', compact('comunicados'));
    }

    public function create()
    {
        return view('inicio');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'required|image',
            'titulo' => 'required',
            'contenido' => 'required',
            'fecha' => 'required'
        ]);

        $comunicado = new Comunicado();
        $comunicado->titulo = $validatedData['titulo'];
        $comunicado->contenido = $validatedData['contenido'];
        $comunicado->fecha = $validatedData['fecha'];

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imgPath = 'img/' . $file->getClientOriginalName();
            $file->move(public_path('img'), $imgPath);
            $comunicado->foto = $imgPath;
        }
 
        $comunicado->save();

        return redirect()->route('inicio');
    }

    public function show($id)
    {
        $comunicado = Comunicado::findOrFail($id);
        return view('inicio', compact('noticia'));
    }

    public function destroy($id)
    {
        $comunicado = Comunicado::findOrFail($id);
        $comunicado->delete();
        return redirect()->route('inicio');
    }
}

