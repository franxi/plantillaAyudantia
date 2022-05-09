<?php 

   require_once("../bds/conexion.php");

  $form_clave = $_GET["id"]; 

  $tipo_anuncio = $_POST["tipo_anuncio_actualizar"];
  $fecha = $_POST["fecha_actualizar"];
  $titulo = $_POST["titulo_actualizar"];
  $descripcion = $_POST["descripcion_actualizar"];

  $newDate = date("d/m/Y",strtotime($fecha));

  $modificarPublicacion_diariomuralSql = "UPDATE `formulario` 
  SET tipo_form_clave = '$tipo_anuncio', form_titulo = '$titulo', form_descripcion = '$descripcion', form_fecha = '$newDate' 
  WHERE formulario.form_clave = '$form_clave'";
  
  $modificarPublicacion_diariomural = mysqli_query($con,$modificarPublicacion_diariomuralSql);
   
  
  header("Location: http://localhost/plantillaAyudantia/plantillaAyudantia/vistas/hu1_diariomural.php");

  

  
?>