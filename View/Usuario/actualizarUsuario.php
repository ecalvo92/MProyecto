<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/UsuarioController.php';

    $id = $_GET["id"];
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
                            <h5 class="card-title fw-semibold mb-4">Actualizar Usuario</h5>

                            <?php
                                if(isset($_POST["txtMensaje"]))
                                {
                                    echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                }
                            ?>

                            <form action="" method="POST">

                                <input type="hidden" id="txtConsecutivo" name="txtConsecutivo" value="<?php echo $datos["Consecutivo"] ?>">

                                <div class="mb-3">
                                    <label class="form-label">Identificación</label>
                                    <input type="text" class="form-control" id="txtIdentificacion"
                                        name="txtIdentificacion" value="<?php echo $datos["Identificacion"] ?>"
                                        onkeyup="ConsultarNombre();">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                    value="<?php echo $datos["Nombre"] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="txtCorreo" name="txtCorreo"
                                    value="<?php echo $datos["CorreoElectronico"] ?>">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Rol</label>
                                    <select id="ddlRoles" name="ddlRoles" class="form-control">
                                    
                                    <?php
                                        $roles = ConsultarRoles();
                                        echo "<option value=''> Seleccione </option>";                                        
                                        While($fila = mysqli_fetch_array($roles))
                                        {
                                            if($fila["Consecutivo"] == $datos["ConsecutivoRol"])
                                            {
                                                echo "<option selected value=" . $fila["Consecutivo"] . ">" . $fila["NombreRol"] . "</option>";
                                            }
                                            else
                                            {
                                                echo "<option value=" . $fila["Consecutivo"] . ">" . $fila["NombreRol"] . "</option>";
                                            }                                            
                                        }
                                    ?>
                                
                                    </select>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Procesar" id="btnActualizarUsuario"
                                    name="btnActualizarUsuario">

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