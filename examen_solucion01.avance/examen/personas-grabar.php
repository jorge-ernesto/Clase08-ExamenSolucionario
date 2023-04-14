<?php

include('libreria.php');

$a=(int)$_POST['txtid'];
$b=$_POST['txtpaterno'];
$c=$_POST['txtmaterno'];
$d=$_POST['txtnombre'];
$e=$_POST['cbogenero'];
$f=$_POST['cbodocutipo'];
$g=$_POST['txtdocunum'];
$h=$_POST['txtmail'];

if ($a==0) {
    #nuevo
    $q="insert into personas(paterno,materno,nombre,genero,docu_tip,docu_num,correo) ";
    $q.="values('$b','$c','$d','$e',$f,'$g','$h')";
} else {
    #actualizacion
    $q="update personas set paterno='$b',materno='$c',nombre='$d',genero='$e',";
    $q.="docu_tip=$f,docu_num='$g',correo='$h' where id=$a";
}

$ex=ejecutar($q);
header('location: personas.php');