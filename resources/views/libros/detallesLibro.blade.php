@extends ('layouts.master')
@section('title', 'Detalle libros')

<!DOCTYPE html>
<html lang=en>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<div class = "mt-5 mb-5 t-auto">

<body>
    <h1>Lista de Libros</h1>
    <?php
    echo "<table border= 1 class = 'table table-secondary table-striped'>";
    ?>
        <tr>
            <th>ISBN</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Idioma</th>
            <th>Publicacion</th>
            <th>Editorial</th>
        </tr>

        @foreach ($libro as $l)
        <tr>
            <td> {{$l->ISBN}} </td>
            <td> {{$l->Titulo}} </td>
            <td> {{$l->Autor}} </td>
            <td> {{$l->Idioma}} </td>
            <td> {{$l->Publicacion}} </td>
            <td> {{$l->Editorial}} </td>
        </tr>
        @endforeach

    </table>

</body>

</html>