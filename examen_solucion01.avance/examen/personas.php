<?php
include('libreria.php');
$q="select * from personas";
$rpta=consultar($q);

$q="select * from documentos";
$docu=consultar($q);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include('menu.html');?>
    <h2>Personas</h2>
    <a href="personas-form.php">Nuevo persona</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Persona/Alumno</th>
                <th>Genero</th>
                <th>Doc-T</th>
                <th>Doc-Num</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rpta as $f) {?>
            <tr>
                <td><?=$f['id']?></td>
                <td><?=$f['paterno']?></td>
                <td><?=$f['genero']?></td>
                <td><?=$f['docu_tip']?></td>
                <td><?=$f['docu_num']?></td>
                <td><?=$f['correo']?></td>
                <td><a href="personas-form.php?id=<?=$f['id']?>">Editar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>