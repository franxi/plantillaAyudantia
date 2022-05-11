<?php 
require_once("/xampp/htdocs/plantillaAyudantia/plantillaAyudantia/bds/conexion.php");
$consultaFormularioSql = "SELECT date_format(form_fecha, '%d-%m-%Y') AS fecha_formateada ,formulario.form_clave,usuario.usuario_nombre,usuario.usuario_correo,
                            formulario.form_titulo,tipo_formulario.tipo_form_clave,tipo_formulario.tipo_form_nombre,
                            formulario.form_fecha,formulario.form_descripcion 
                          FROM formulario 
                          INNER JOIN usuario 
                          ON usuario.usuario_clave = formulario.usuario_clave
                          INNER JOIN tipo_formulario 
                          ON tipo_formulario.tipo_form_clave = formulario.tipo_form_clave";

$consultaFormulario = mysqli_query($con,$consultaFormularioSql);

?>