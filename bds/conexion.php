<?php

//DATOS DE CONEXION A LA BASE DE DATOS
$db_host = "146.83.194.142";
$db_user = "E7software";
$db_pass = "E7software1128";
$db_name = "E7software_bd";

$con  = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$con){

    echo 'no se pudo conectar a la base de datos:' .mysqli_connect_errno()();

}else{

    echo 'se conecto';
   
}

?>