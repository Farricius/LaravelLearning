<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class editoriales_Controller extends Controller
{
    public function mostrarTodos()
    {
        $editoriales = Editorial::all();
        return view('editoriales.listaEditorial' , ['editoriales' => $editoriales]);
    }

    // public function detallesEditorial($editorial)
    // {
    //     $editorial = Editorial::where('id', 'like', "%$editorial%");
    //     return view ('editoriales.detallesEditorial' , ['editorial' =>$editorial]);
    // }

    public function detallesEditorial(Editorial $editorial)
    {
        return view("editoriales.detallesEditorial", compact('editorial'));
    }

    public function crearEditorial()
    {
        return view("editoriales.crearEditorial");
    }

    public function lanzarCrearEditorial(Request $request)
    {
        $editorial = new Editorial();
        $editorial->nombre = $request->nombre;
        $editorial->nacionalidad = $request->nacionalidad;
        $editorial->save();
    }
}
