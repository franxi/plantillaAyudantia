
    <!-- Modal publicar -->
    <div class="modal fade bd-example-modal-lg" id="publicar">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-weight-bold mb-0">Formulario</h2>
                    <button type="button" class="btn btn-primary" id="cerrarFormulario" class="close"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../controlador/publicar_diariomural.php" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6">

                                <label>Tipo de anuncio</label>
                                <select class="form form-control" name="tipo_anuncio" required>
                                    <option value="1">Anuncio</option>
                                    <option value="2">Propaganda</option>
                                    <option value="3">Solicitud</option>
                                    <option value="4">Otro</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-6">
                                <label>Fecha</label>
                                <input type="date" class="form-control" name="fecha"  min="2022-01-01" max="2022-12-31" autocomplete="off" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" class="form-control" name="titulo" autocomplete="off" required>

                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea rows="10" cols="50" class="form-control" name="descripcion" required></textarea>

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