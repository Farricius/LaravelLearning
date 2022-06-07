@extends ('layouts.master')
@section('title', 'Lista libros')
@section ('content')

<body>

<div class = "mt-5 mb-5 t-auto">
    <?php
    echo ' <h1>Lista de Libros</h1>';
    echo "<table border= 1 class = 'table table-secondary table-striped'>";
    echo "<tr><th>ISBN</th><th>Titulo</th><th>Autor</th><th>Idioma</th><th>Publicacion</th><th>Editorial</th><th>Action #1</th><th>Action #2</th></tr>";

    foreach ($libros as $xd) {
        echo "<tr>";
        echo "<td>" . $xd->ISBN . "</td>";
        echo "<td>" . $xd->Titulo . "</td>";
        echo "<td>" . $xd->Autor . "</td>";
        echo "<td>" . $xd->Idioma . "</td>";
        echo "<td>" . $xd->Publicacion . "</td>";
        echo "<td><a href='/editorial/" . $xd->Editorial . "'>" . $xd->Editorial . "</a></td>";
        echo "<td><a href='/libros/".$xd->ISBN."'>" . 'Detalle' . "</a></td>";
        echo "<td><a href='/libros/editar/".$xd->ISBN."'>" . 'Edit' . "</a></td>";

        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>
</body>
</html>
