<?php
include('libreria.php');
$q="select * from vmatricula order by alumno";
$mat=consultar($q);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriculas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include('menu.html')?>

    <a href="matriculas-form.php">Nueva matricula</a><br><br>
    <table>
        <thead>
            <tr>
                <td>IdMatricula</td>
                <td>Curso</td>
                <td>Alumno</td>
                <td>Accion</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mat as $m) {?>
            <tr>
                <td><?=$m['id']?></td>
                <td><?=$m['nombre']?></td>
                <td><?=$m['alumno']?></td>
                <td><a href="matriculas-form.php?id=<?=$m['id']?>">Editar</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>