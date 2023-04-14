<?php
include('libreria.php');
$q="select * from cursos";
$rpta=consultar($q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include('menu.html')?>
    <h2>Cursos</h2>
    <a href="cursos-form.php">Nuevo curso</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rpta as $w) { ?>
            <tr>
                <td><?=$w['id']?></td>
                <td><?=$w['nombre']?></td>
                <td><?=$w['codigo']?></td>
                <td><?=$w['estado']?></td>
                <td><a href="cursos-form.php?id=<?=$w['id']?>">Editar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>