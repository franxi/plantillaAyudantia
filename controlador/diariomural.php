<?php 
require_once("../bds/conexion.php");

$consultaFormularioSql = "SELECT * FROM formulario";
$consultaFormulario = mysqli_query($con,$consultaFormularioSql);

foreach($consultaFormulario as $row){

    echo($row['form_titulo']);

}

?>

