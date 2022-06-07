<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo ' <h1>Lista de Editorial</h1>';
    echo "<table border= 1>";
    echo "<tr><th>Nombre</th><th>Nacionalidad</th><th>ex</th>";
    foreach ($editoriales as $xd) {
        echo "<tr>";
        echo "<td>" . $xd->Nombre . "</td>";
        echo "<td>" . $xd->Nacionalidad . "</td>";
        //echo "<td><a href='/editorial/" . $xd->Editorial . "'>" . $xd->Editorial . "</a></td>";
        echo "</tr>";
    }
    echo "</table>";


    
    ?>
</body>

</html>