<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/UsuarioController.php';

    $id = $_SESSION["ConsecutivoUsuario"];
    $datos = ConsultarUsuario($id);
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
                            <h5 class="card-title fw-semibold mb-4">Mi Perfil</h5>

                            <?php
                                if(isset($_POST["txtMensaje"]))
                                {
                                    echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                }
                            ?>

                            <form action="" method="POST">

                                <div class="mb-3">
                                    <label class="form-label">Identificación</label>
                                    <input type="text" class="form-control" id="txtIdentificacion"
                                        name="txtIdentificacion" value="<?php echo $datos["Identificacion"] ?>"
                                        onkeyup="ConsultarNombre();">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                    value="<?php echo $datos["Nombre"] ?>" readOnly="true"
                                    style="background-color:#f1f1f1">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="txtCorreo" name="txtCorreo"
                                    value="<?php echo $datos["CorreoElectronico"] ?>">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Rol</label>
                                    <input type="text" class="form-control" id="txtRol" name="txtRol" readOnly="true"
                                    style="background-color:#f1f1f1"
                                    value="<?php echo $datos["NombreRol"] ?>">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Procesar" id="btnActualizarPerfil"
                                    name="btnActualizarPerfil">

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
    <script src="../js/RegistrarUsuarios.js"></script>

</body>

</html>