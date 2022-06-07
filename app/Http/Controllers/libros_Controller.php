<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;


class libros_Controller extends Controller
{
    public function index() {
        echo "WELCOME TO LIBRARY...";
    }

    public function mostrarTodos () {
        $libros = Libro::all();
        return view('libros.listaLibros' , ['libros' => $libros]);
    }
    
    public function detallesLibro($ISBN) {
        $libro = Libro::where('ISBN', 'like', "%$ISBN%")->paginate(13);
        return view ('libros.detallesLibro' , ['libro' =>$libro]);
    }

    public function crearLibro () {
        return view ("libros.crearLibro");
    }    

    public function lanzarCrearLibro(Request $request)
    {
        $libro = new Libro();
        $libro->ISBN = $request->ISBN;
        $libro->titulo = $request->titulo;
        $libro->idioma = $request->idioma;
        $libro->autor = $request->autor;
        $libro->publicacion = $request->publicacion;
        $libro->editorial = $request->editorial;
        $libro->save();
        return $this->mostrarTodos();
    }

    public function editarLibro(Libro $libro)
    {
        return view("libros.update", compact("libro"));
    }

    public function lanzarEditarLibro(Request $request)
    {
        $isbn = $_POST["ISBN"];
        $libro = Libro::find($isbn);
        $libro->titulo = $request->titulo;
        $libro->idioma = $request->idioma;
        $libro->autor = $request->autor;
        $libro->publicacion = $request->publicacion;
        $libro->editorial = $request->editorial;
        $libro->save();
        return $this->mostrarTodos();
    }
}
