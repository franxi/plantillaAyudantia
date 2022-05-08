<?php

//DATOS DE CONEXION A LA BASE DE DATOS
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "comunicacion";

$con  = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$con){

    echo 'no se pudo conectar a la base de datos:' .mysqli_connect_errno()();

}else{

    echo 'se conecto';
   
}

?>