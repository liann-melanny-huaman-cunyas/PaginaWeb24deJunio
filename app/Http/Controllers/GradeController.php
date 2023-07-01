<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class GradeController extends Controller
{
    public function Insertar(Request $request)
    {
        try {
            DB::beginTransaction();
            $reg = new Grade;
            $reg->curso = $request->get('curso');
            $reg->grado = $request->get('grado');
            $reg->seccion = $request->get('seccion');
            $reg->archivo = $request->get('archivo');

            if ($request->hasFile('pdf')) {
                $archivo = $request->file('pdf');
                $archivo->move(public_path().'/Archivo/', $archivo->getClientOriginalName());
                $reg->documento = $archivo->getClientOriginalName();
            }

            $reg->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
    }
}