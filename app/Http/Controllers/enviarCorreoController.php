<?php

namespace App\Http\Controllers;

use App\Mail\enviarMail;
use Illuminate\Http\Request;
use App\Models\Peticiones;
use Illuminate\Support\Facades\Mail;

class enviarCorreoController extends Controller
{
    public function solicitud() {
        return view ('email.email');
    }

public function sendEmail() {

    if(isset($_POST['nombreApellidos']) && isset($_POST['nombreApellidos']) && isset($_POST['nombreApellidos'])) {

        $peticiones = new Peticiones();
        $peticiones->nombreApellidos = $_POST['nombreApellidos'];
        $peticiones->correo = $_POST['correo'];
        $peticiones->titulo = $_POST['titulo'];
        $peticiones->save();

        Mail::to($_POST('correo'))->send(new enviarMail($_POST['titulo']));
        return "Correo enviado";

    }
}

public function listadoPeticiones() {
    $peticiones = Peticiones::all();
    return view("email.listadoPeticiones", ['peticiones' => $peticiones]);
}

}
