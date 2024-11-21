<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/UsuarioController.php';
?>

<!doctype html>
<html lang="en">

<?php
    ReferenciasCSS();
?>

<body class="page-wrapper">
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <?php
            MostrarMenu();
        ?>

        <div class="body-wrapper">

            <?php
                MostrarHeader();
            ?>

            <div class="container-fluid">
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Actualzar Contraseña</h5>

                            <?php
                                if(isset($_POST["txtMensaje"]))
                                {
                                    echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                }
                            ?>

                            <form action="" method="POST">

                                <div class="mb-3">
                                    <label class="form-label">Contraseña Actual</label>
                                    <input type="password" class="form-control" id="txtContrasennaActual" name="txtContrasennaActual">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="txtContrasennaNueva" name="txtContrasennaNueva">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" id="txtContrasennaConfirmar" name="txtContrasennaConfirmar">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Procesar" id="btnActualizarAcceso" name="btnActualizarAcceso">

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <?php
        ReferenciasJS();
    ?>

</body>

</html>