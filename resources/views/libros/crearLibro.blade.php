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
    <div class="col-12 col-md-12">
        <h1>Crea un Libro:</h1>
        <form action="/libros/lanzarCreate" method="POST">
            @csrf
            <label>
                ISBN:
                <input class="form-control" type="text" name="ISBN">
                <br>
            </label>
            <label>
                titulo:
                <input class="form-control" type="text" name="titulo">
                <br>
            </label>
            <label>
                autor:
                <input class="form-control" type="text" name="autor">
                <br>
            </label>
            <label>
                idioma:
                <input class="form-control" type="text" name="idioma">
                <br>
            </label>
            <label>
                publicacion:
                <input class="form-control" type="text" name="publicacion">
                <br>
            </label>
            <label>
                editorial:
                <input class="form-control" type="text" name="editorial">
                <br>
            </label>
            <label>
                <br>
                <div class="col-12 col-md-12">
                    <input class="form-control" type="submit" value="Enviar">
                    <br>
            </label>
    </div>
    </form>
    </div>
</body>

</html>