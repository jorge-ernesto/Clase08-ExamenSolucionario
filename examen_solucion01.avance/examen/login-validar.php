<?php

include('libreria.php');

$a=$_POST['txtusuario'];
$b=$_POST['txtclave'];

$sql="select * from usuarios where usuario='$a' and clave='$b' and estado=1";
$rpta=consultar($sql);

session_start();
if (count($rpta)==1) {
    $_SESSION['acceso']='ok';
    $_SESSION['usuario']=$a;
    header('location: principal.php');
} else {
    session_destroy();
    header('location: login.html');
}