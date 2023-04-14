<?php

include('libreria.php');

$a=(int)$_POST['txtid'];
$b=$_POST['txtusuario'];
$c=$_POST['txtclave'];
$d=(int)$_POST['cboestado'];

if ($a==0) {
    #nuevo
    $q="insert into usuarios(usuario,clave,estado) ";
    $q.="values('$b','$c',$d)";
} else {
    #edicion
    $q="update usuarios set usuario='$b',clave='$c',estado=$d where id=$a";
}

$ex=ejecutar($q);
header('location: usuarios.php');