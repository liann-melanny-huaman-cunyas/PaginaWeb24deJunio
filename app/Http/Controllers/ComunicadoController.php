<?php

namespace App\Http\Controllers;
use App\Models\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    public function index()
    {
        $comunicados = Comunicado::latest()->get();
        return view('comunicados', compact('comunicados'));
    }

    public function create()
    {
        return view('crearcomunicados');
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
            $imgPath = 'imgs/' . $file->getClientOriginalName();
            $file->move(public_path('imgs'), $imgPath);
            $comunicado->foto = $imgPath;
        }

        $comunicado->save();

        return redirect()->route('comunicados');
    }

    public function show($id)
    {
        $comunicado = Comunicado::findOrFail($id);
        return view('comunicado.show', compact('noticia'));
    }

    public function destroy($id)
    {
        $comunicado = Comunicado::findOrFail($id);
        $comunicado->delete();
        return redirect()->route('comunicado.index');
    }
}

