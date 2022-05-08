<!-- conexion bds -->
<?php include("../bds/conexion.php")?>
<!-- fin conexion bds -->
<!-- head -->
<?php include('../partes/head.php') ?>
<!-- fin head -->

<!-- diario mural -->
<?php include("../controlador/diariomural.php") ?>
<!-- fin diario mural -->

<body>

    <div class="d-flex" id="content-wrapper">

        <!-- sideBar -->
        <?php include('../partes/sidebar.php') ?>

        <!-- fin sideBar -->

        <div class="w-100">

            <!-- Navbar -->
            <?php include('../partes/nav.php') ?>
            <!-- Fin Navbar -->

            <!-- Page Content -->
            <div id="content" class="bg-light w-100">

                <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h1 class="font-weight-bold mb-0">Bienvenido Juan</h1>
                                <p class="lead text-muted">Revisa la última información del diario mural</p>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
                <section class="py-3 bg-light">
                    <div class=" container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h2 class="font-weight-bold mb-0">Diario mural</h2>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center" data-toggle="modal"
                                    data-target="#publicar">Publicar</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-0 my-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <table class="table table-striped">
                                    <tr class="bg-primary" style="color:white">
                                        <th class="col-lg-3 col-md-2" scope="col">Nombre</th>
                                        <th class="col-lg-2 col-md-1" scope="col">Tipo</th>
                                        <th class="col-lg-2 col-md-1" scope="col">Fecha</th>
                                        <th class="col-lg-4 col-md-6" scope="col">Descripcion</th>
                                        <th class="col-lg-1 col-md-2" scope="col">Accion</th>
                                    </tr>

                                    <?php if($consultaFormulario): foreach($consultaFormulario as $row): ?>

                                    <tr>
                                        <td><?php echo $row['usuario_nombre']?> </td>
                                        <td><?php echo $row['tipo_form_clave']?> </td>
                                        <td><?php echo $row['form_fecha']?></td>
                                        <td><?php echo $row['form_descripcion']?></td>
                                        <td class="d-flex justify-content-end px-0">

                                            <button type="button" class="btn btn-primary mx-1"><i
                                                    class="fa-solid fa-book"></i></button>
                                            <button type="button" class="btn btn-primary"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>

                                    <?php endforeach; endif ?>

                                </table>

                            </div>

                        </div>
                    </div>
                </section>

            </div>

        </div>


    </div>

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
                    <form>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="titulo" required>

                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6">
                                <label>Tipo de anuncio</label>
                                <select class="form form-control" name="estado" required>
                                    <option value="1">Publicidad</option>
                                    <option value="2">Solicitud</option>
                                    <option value="3">Otro</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6">
                                <label>Fecha</label>
                                <input type="text" id="datepicker" class="form-control" name="fecha" required>

                            </div>

                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea name="textarea" rows="10" cols="50" class="form-control" name="descripcion"
                                required></textarea>

                        </div>


                        <div class="row mx-5">

                            <div class="form-group col-lg-12 col-md-12">

                                <button type="submit" class="btn btn-primary col-lg-9  col-md-9">Subir</button>

                                <button type="reset" class="btn btn-primary col-lg-2  col-md-2"><i
                                        class="fa-solid fa-trash"></i></button>

                            </div>


                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>