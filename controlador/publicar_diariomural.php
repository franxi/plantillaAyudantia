<?php

require_once("../bds/conexion.php");

$tipo_anuncio = $_POST["tipo_anuncio"];
$fecha = $_POST["fecha"];
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];

$newDate = date("d/m/Y",strtotime($fecha));

$publicar_diariomuralSql = "INSERT INTO `formulario`(`usuario_clave`, `tipo_form_clave`, `form_titulo`, `form_descripcion`, `form_fecha`, `form_hora`, `form_importancia`)
VALUES ('1','$tipo_anuncio','$titulo','$descripcion','$newDate ','11:12:00','muy importante');";


$publicar_diariomural = mysqli_query($con,$publicar_diariomuralSql);


header("Location: http://localhost/plantillaAyudantia/plantillaAyudantia/vistas/hu1_diariomural.php");

?>