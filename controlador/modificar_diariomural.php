<?php 

   require_once("../bds/conexion.php");

   $form_clave = $_GET["id1"];

  echo '¡Hola ' . $form_clave  . '!';
  header("Location: http://localhost/plantillaAyudantia/plantillaAyudantia/vistas/hu1_diariomural.php");
  
  $modal = "#modificar_publicacion";

  if($algo) {
      $modal = "$('#modal').show();";
  }

?>

<!-- Modal modificar publicacion -->
<div class="modal fade bd-example-modal-lg" id="modificar_publicacion">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="font-weight-bold mb-0">Modificar formulario</h2>
                <button type="button" class="btn btn-primary" id="cerrarFormulario" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../controlador/modificar_diariomural.php" method="POST">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6">

                            <label>Tipo de anuncio</label>
                            <select class="form form-control" name="tipo_anuncio_actualizar" required>
                                <option value="1">Anuncio</option>
                                <option value="2">Propaganda</option>
                                <option value="3">Solicitud</option>
                                <option value="4">Otro</option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6 col-md-6">
                            <label>Fecha</label>
                            <input autocomplete="off" type="text" id="datepickerDos" class="form-control"
                                name="fecha_actualizar" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="titulo_actualizar">

                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea rows="10" cols="50" class="form-control" name="descripcion_actualizar"
                            required></textarea>

                    </div>

                    <div class="row mx-5">

                        <div class="form-group col-lg-12 col-md-12">

                            <button type="submit" class="btn btn-primary col-lg-9 col-md-9">Subir</button>
                            <button type="reset" class="btn btn-primary col-lg-2  col-md-2"><i
                                    class="fa-solid fa-trash"></i>&nbsp</button>

                        </div>


                    </div>

                </form>
            </div>
        </div>
    </div>
</div>