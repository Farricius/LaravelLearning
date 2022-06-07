<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = "librosm";
    protected $primaryKey = "ISBN";
}
//ISBN 	Titulo 	Autor 	Idioma 	Publicacion 	Editoria