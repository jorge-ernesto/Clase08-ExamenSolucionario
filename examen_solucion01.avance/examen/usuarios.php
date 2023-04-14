<?php
include('libreria.php');
$q="select * from usuarios";
$rpta=consultar($q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include('menu.html')?>
    <h2>Usuarios</h2>
    <a href="usuarios-form.php">Nuevo usuario</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rpta as $w) { ?>
            <tr>
                <td><?=$w['id']?></td>
                <td><?=$w['usuario']?></td>
                <td><?=$w['clave']?></td>
                <td><?=$w['estado']?></td>
                <td><a href="usuarios-form.php?id=<?=$w['id']?>">Editar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>