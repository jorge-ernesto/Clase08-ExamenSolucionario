<?php

include('libreria.php');
$idm=(int)$_POST['txtidmatricula'];
$idc=(int)$_POST['cbocurso'];
$ida=(int)$_POST['cboalumno'];



if ($idm==0) {
    #agregar
    $q="select * from matricula where idalumno=$ida and idcurso=$idc";
    $existe=consultar($q);
    if (count($existe)==0) {
        $q="insert into matricula(idcurso,idalumno) values($idc,$ida)";
        $ex=ejecutar($q);
    }
} else {
    #editar
    $q="update matricula set idcurso=$idc,idalumno=$ida where id=$idm";
    $ex=ejecutar($q);
}
header('location: matriculas.php');