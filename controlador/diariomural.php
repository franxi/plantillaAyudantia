<?php 
require_once("../bds/conexion.php");

$consultaFormularioSql = "SELECT form_clave,usuario.usuario_nombre,tipo_form_clave,form_fecha,form_descripcion 
                          FROM formulario INNER JOIN usuario 
                          WHERE usuario.usuario_clave = formulario.usuario_clave";
$consultaFormulario = mysqli_query($con,$consultaFormularioSql);

?>