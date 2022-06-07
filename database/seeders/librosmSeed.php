<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class librosmSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro = new Libro();
        $libro->ISBN = "1234567892881";
        $libro->Titulo = "Harry Potter y la piedra filosofal";
        $libro->Autor = "JK Rowling";
        $libro->Idioma = "Castellano";
        $libro->Publicacion = "1997-01-01";
        $libro->Editorial = 1;
        $libro->save();

        $libro2 = new Libro();
        $libro2->ISBN = "1234567892882";
        $libro2->Titulo = "Harry Potter y la cámara secreta";
        $libro2->Autor = "JK Rowling";
        $libro2->Idioma = "Castellano";
        $libro2->Publicacion = "1998-01-01";
        $libro2->Editorial = 1;
        $libro2->save();

        $libro3 = new Libro();
        $libro3->ISBN = "1234567892883";
        $libro3->Titulo = "Harry Potter y prisionero de Azkaban";
        $libro3->Autor = "JK Rowling";
        $libro3->Idioma = "Castellano";
        $libro3->Publicacion = "1999-01-01";
        $libro3->Editorial = 1;
        $libro3->save();

        $libro4 = new Libro();
        $libro4->ISBN = "1234567892884";
        $libro4->Titulo = "Harry Potter y el cáliz de fuego";
        $libro4->Autor = "JK Rowling";
        $libro4->Idioma = "Castellano";
        $libro4->Publicacion = "2001-01-01";
        $libro4->Editorial = 1;
        $libro4->save(); 
        
        $libro5 = new Libro();
        $libro5->ISBN = "1234567892885";
        $libro5->Titulo = "Harry Potter y la orden del fenix";
        $libro5->Autor = "JK Rowling";
        $libro5->Idioma = "Castellano";
        $libro5->Publicacion = "2003-01-01";
        $libro5->Editorial = 1;
        $libro5->save();

        $libro6 = new Libro();
        $libro6->ISBN = "1234567892886";
        $libro6->Titulo = "Harry Potter y el misterio del principe";
        $libro6->Autor = "JK Rowling";
        $libro6->Idioma = "Castellano";
        $libro6->Publicacion = "2004-01-01";
        $libro6->Editorial = 1;
        $libro6->save();

        $libro7 = new Libro();
        $libro7->ISBN = "1234567892887";
        $libro7->Titulo = "Harry Potter y las reliquias de la muerte";
        $libro7->Autor = "JK Rowling";
        $libro7->Idioma = "Castellano";
        $libro7->Publicacion = "2006-01-01";
        $libro7->Editorial = 1;
        $libro7->save();

        //
    }
}
