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
        <h1>Solicitar:</h1>
        <form action="/sendEmail" method="POST">
            @csrf
            <label>
                Nombre y apellidos:
                <input class="form-control" type="text" name="nombreApellidos">
                <br>
            </label>
            <label>
                Correo:
                <input class="form-control" type="text" name="correo">
                <br>
            </label>
            <label>
                Título del libro:
                <input class="form-control" type="text" name="titulo">
                <br>
            </label>

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