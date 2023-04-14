<?php
include('libreria.php');
$q="select * from cursos";
$cursos=consultar($q);

$idcurso=0;
$alumnos=array();
if (isset($_POST['cbocurso'])) {
    $idcurso=$_POST['cbocurso'];
    $q="select * from vmatricula where idcurso=$idcurso";
    $alumnos=consultar($q);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Notas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include('menu.html');?>

    <form action="" method="post">
        Curso: <br>
        <select name="cbocurso" id="cbocurso">
            <option value="0">Seleccione</option>
            <?php foreach ($cursos as $c) {?>
            <option value="<?=$c['id']?>" <?=$c['id']==$idcurso ? 'selected' : '' ?>><?=$c['nombre']?></option>
            <?php } ?>
        </select>
        <br><br>
        <input type="submit" value="Buscar">
    </form>

    <br>
    <table>
        <thead>
            <tr>
                <td>IdMatricula</td>
                <td>IdCurso</td>
                <td>Curso</td>
                <td>IdAlumno</td>
                <td>Alumno</td>
                <td>N1</td>
                <td>N2</td>
                <td>N3</td>
                <td>N4</td>
                <td>Prom</td>
                <td>IngresarNotas</td>
                <td>Notificacion</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $a) { ?>
            <tr>
                <td><?=$a['id']?></td>
                <td><?=$a['idcurso']?></td>
                <td><?=$a['nombre']?></td>
                <td><?=$a['idalumno']?></td>
                <td><?=$a['alumno']?></td>
                <td><?=$a['n1']?></td>
                <td><?=$a['n2']?></td>
                <td><?=$a['n3']?></td>
                <td><?=$a['n4']?></td>
                <td><?=$a['prom']?></td>
                <td>IngresarNotas</td>
                <td><?=$a['notificado']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>