@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crea un editorial:</h1>
    <form action="/editorial/lanzarCreate" method="POST">
        @csrf
        <div class="col-12 col-md-12">
            <label>
                nombre:
                <input class="form-control" type="text" name="nombre">
                <br>
            </label>
            <label>
                nacionalidad:
                <input class="form-control" type="text" name="nacionalidad">
                <br>
            </label>
            <label>
                <input class="form-control" type="submit" value="Enviar">
                <br>
            </label>
    </form>
</body>
</div>

</html>