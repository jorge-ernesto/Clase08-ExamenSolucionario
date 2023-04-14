<?php

include('libreria.php');

$q="select * from cursos";
$cursos=consultar($q);

$q="select * from personas";
$alumnos=consultar($q);

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $q="select * from matricula where id=$id";
    $mat=consultar($q);
    $idcurso=$mat[0]['idcurso'];
    $idalumno=$mat[0]['idalumno'];
} else {
    $id=0;
    $idcurso=0;
    $idalumno=0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricual</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <form action="matriculas-grabar.php" method="post">
        Matricula: <br>
        <input type="text" name="txtidmatricula" id="txtidmatricula" value="<?=$id?>" readonly>
        <br>
        Curso: <br>
        <select name="cbocurso" id="cbocurso">
            <option value="">Seleccione</option>
            <?php foreach ($cursos as $c) { ?>
            <option value="<?=$c['id']?>" <?=$c['id']==$idcurso ? 'selected' : ''?>><?=$c['nombre']?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        Alumno: <br>
        <select name="cboalumno" id="cboalumno">
            <option value="">Seleccione</option>
            <?php foreach ($alumnos as $a) { ?>
            <option value="<?=$a['id']?>" <?=$a['id']==$idalumno ? 'selected' : ''?>>
                <?=$a['paterno'].' '.$a['materno'].' '.$a['nombre']?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Grabar">
    </form>
</body>

</html>