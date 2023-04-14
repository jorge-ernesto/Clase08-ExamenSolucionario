<?php
include('libreria.php');

$q="select * from documentos";
$docus=consultar($q);

if (isset($_GET['id'])) {
    $a=$_GET['id'];
    $q="select * from personas where id=$a";
    $rpta=consultar($q);
    $b=$rpta[0]['paterno'];
    $c=$rpta[0]['materno'];
    $d=$rpta[0]['nombre'];
    $e=$rpta[0]['genero'];
    $f=$rpta[0]['docu_tip'];
    $g=$rpta[0]['docu_num'];
    $h=$rpta[0]['correo'];
} else {
    $a=0;
    $b='';
    $c='';
    $d='';
    $e='';
    $f='';
    $g='';
    $h='';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <a href="personas.php">Regresar</a>
    <br><br>
    <form action="personas-grabar.php" method="post">
        id: <br>
        <input type="text" name="txtid" id="txtid" value="<?=$a?>" readonly> <br>
        Paterno: <br>
        <input type="text" name="txtpaterno" id="txtpaterno" value="<?=$b?>"> <br>
        Materno: <br>
        <input type="text" name="txtmaterno" id="txtmaterno" value="<?=$c?>"> <br>
        Nombre: <br>
        <input type="text" name="txtnombre" id="txtnombre" value="<?=$d?>"> <br>
        Genero: <br>
        <select name="cbogenero" id="cbogenero">
            <option>Seleccione ..</option>
            <option value="F" <?=$e=='F' ? 'selected' : ''?>>Femenino</option>
            <option value="M" <?=$e=='M' ? 'selected' : ''?>>Masculino</option>
        </select>
        <br>
        Tipo Documento: <br>
        <select name="cbodocutipo" id="cbodocutipo">
            <option>Seleccione ..</option>
            <?php foreach ($docus as $d) {?>
            <option value="<?=$d['id']?>" <?=$d['id']==$f ? 'selected' : ''?>><?=$d['codigo']?></option>
            <?php } ?>
        </select>
        <br>
        Documento Nro: <br>
        <input type="text" name="txtdocunum" id="txtdocunum" value="<?=$g?>"> <br>
        Correo: <br>
        <input type="email" name="txtmail" id="txtmail" value="<?=$h?>"> <br>

        <br>
        <br>
        <input type="submit" value="Grabar">
    </form>
</body>

</html>