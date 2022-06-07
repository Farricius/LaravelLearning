@extends ('layouts.master')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<div class = "row col-12 col-md-6 mt-5 mb-5 offset-md-3" style = "text-align:center;">
    <h1>Actualiza tu libro:</h1>
    <form action="/libros/lanzarEditarLibro" method="POST">
    @csrf
        <input class ="form-control" type="hidden" name="ISBN" value="<?php echo $libro->ISBN ?>">


        <label>
            titulo:
            <input class ="form-control" type="text" name="titulo" value="<?php echo $libro->titulo ?>">
            <br>

        </label>

        <label>
            autor:
            <input class ="form-control" type="text" name="autor" value="<?php echo $libro->autor ?>">
            <br>

        </label>

        <label>
            idioma:
            <input class ="form-control" type="text" name="idioma" value="<?php echo $libro->idioma ?>">
            <br>
        </label>

        <label>
            publicacion:
            <input class ="form-control" type="text" name="publicacion" value="<?php echo $libro->publicacion ?>">
            <br>
        </label>

        <label>
            editorial:
            <input class ="form-control" type="text" name="editorial" value="<?php echo $libro->editorial ?>">
            <br>

        </label>

        <div class = "col-12 col-md-12">
        <label>
            <input class ="form-control" type="submit" value="Enviar">
            <br>
        </label>
        </div>

    </form>
</div>
</body>

</html>