<?php
include('libreria.php');
if (isset($_GET['id'])) {
    #editar
    $a=$_GET['id'];
    $q="select * from usuarios where id=$a";
    $rpta=consultar($q);
    $b=$rpta[0]['usuario'];
    $c=$rpta[0]['clave'];
    $d=$rpta[0]['estado'];
} else {
    #nuevo
    $a=0;
    $b='';
    $c='';
    $d=1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios-Mantenimiento</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <a href="principal.php">Regresar</a>
    <br><br>
    <form action="usuarios-grabar.php" method="post">
        id: <br>
        <input type="text" name="txtid" id="txtid" value="<?=$a?>" readonly> <br>
        usuario: <br>
        <input type="text" name="txtusuario" id="txtusuario" value="<?=$b?>"> <br>
        clave: <br>
        <input type="text" name="txtclave" id="txtclave" value="<?=$c?>"> <br>
        Estado: <br>
        <select name="cboestado" id="cboestado">
            <option>Seleccione ..</option>
            <option value="0" <?=$d==0 ? 'selected' : ''?>>Desactivado</option>
            <option value="1" <?=$d==1 ? 'selected' : ''?>>Activo</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Grabar">
    </form>
</body>

</html>