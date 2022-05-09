<?php 

   require_once("../bds/conexion.php");

  $eliminar = $_GET["id"]; 
  $eliminarPublicacion_diariomuralSql = "DELETE FROM `formulario` WHERE form_clave = $eliminar";
  
  $eliminarPublicacion_diariomural = mysqli_query($con,$eliminarPublicacion_diariomuralSql);
   
  
  header("Location: http://localhost/plantillaAyudantia/plantillaAyudantia/vistas/hu1_diariomural.php");

  
?>