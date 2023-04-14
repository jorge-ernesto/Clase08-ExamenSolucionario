<?php

include('libreria.php');

$a=(int)$_POST['txtid'];
$b=$_POST['txtnombre'];
$c=$_POST['txtcodigo'];
$d=(int)$_POST['cboestado'];

if ($a==0) {
    #nuevo
    $q="insert into cursos(nombre,codigo,estado) ";
    $q.="values('$b','$c',$d)";
} else {
    #edicion
    $q="update cursos set nombre='$b',codigo='$c',estado=$d where id=$a";
}

$ex=ejecutar($q);
header('location: cursos.php');