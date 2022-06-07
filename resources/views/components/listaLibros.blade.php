<table border=2>
    <tr>
        <th>ISBN</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Idioma</th>
        <th>Fecha</th>
        <th>Editorial code</th>
    </tr>

    @foreach ($libros as $libro)

    <tr>
        <td>{{$libro->ISBN}}</td>
        <td>{{$libro->Titulo}}</td>
        <td>{{$libro->Autor}}</td>
        <td>{{$libro->idioma}}</td>
        <td>{{$libro->Publicacion}}</td>
        <td>{{$libro->Editorial}}</td>
    </tr>

    @endforeach

</table>