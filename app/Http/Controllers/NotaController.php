<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::distinct()->get();
        return view('listado', compact('notas'));
    }

    public function create()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        // Valida los datos enviados en el formulario
            $validatedData = $request->validate([
                'grado' => 'required',
                'seccion' => 'required',
                'curso' => 'required',
                'bimestre'=> 'required',
                'pdf' => 'required|file|mimes:pdf|max:2048',
            ]);

            // Crea una nueva instancia de la nota y guarda los datos en la base de datos
            $nota = new Nota();
            $nota->grado = $validatedData['grado'];
            $nota->seccion = $validatedData['seccion'];
            $nota->curso = $validatedData['curso'];
            $nota->bimestre = $validatedData['bimestre'];

            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');
                $pdfPath = 'pdfs/' . $pdf->getClientOriginalName();
                $pdf->move(public_path('pdfs'), $pdfPath);
                $nota->ruta_pdf = $pdfPath;
            }



            $nota->save();

            // Redirige al listado de notas después de guardar
        return redirect()->route('notas.index');

    }

    public function show($id)
        {
            $nota = Nota::find($id);

            if (!$nota) {
                abort(404, 'La nota no existe.');
            }

            $pdfPath = public_path('pdfs/' . $nota->ruta_pdf);
            if (!file_exists($pdfPath)) {
                abort(404, 'El archivo PDF no se encuentra.');
            }

            // Redireccionar al PDF
            return response()->file($pdfPath);
        }


    public function destroy($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();
        return redirect()->route('notas.index');
    }
}
