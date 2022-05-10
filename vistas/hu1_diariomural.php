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
                                        <td><?php echo $row['usuario_nombre']."<br>"?>
                                            <?php echo "<small>".$row['usuario_correo']."</small>"?></td>

                                        <td><?php echo $row['tipo_form_nombre']?> </td>
                                        <td><?php echo $row['fecha_formateada']?> </td>

                                        <td><?php echo "<b>".strtoupper($row['form_titulo'])."</b><br>"?>
                                            <?php echo $row['form_descripcion']?></td>

                                        <td class="d-flex justify-content-end px-0">

                                            <button type="button" class="btn btn-primary mx-1" data-toggle="modal"
                                                data-target="#modificar_publicacion<?php echo $row['form_clave'];?>">
                                                <i class="fa-solid fa-book"></i></button>


                                            <a class="btn btn-primary"
                                                href="../controlador/eliminar_diariomural.php?id=<?php echo $row['form_clave'];?>"><i
                                                    class="fa-solid fa-trash"></i></a>

                                        </td>
                                    </tr>

                                    <!-- Modal actulizar publicacion -->

                                    <?php include("../partes/modales_diariomural/modal_modificar_publicacion.php") ;?>



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

    <?php include("../partes/modales_diariomural/modal_publicar.php") ?>

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