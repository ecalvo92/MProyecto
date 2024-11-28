<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/ProductoController.php';

    $id = $_GET["id"];
    $datos = ConsultarProducto($id);
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
                            <h5 class="card-title fw-semibold mb-4">Actualizar Producto</h5>

                            <?php
                                if(isset($_POST["txtMensaje"]))
                                {
                                    echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                }
                            ?>

                            <form action="" method="POST" enctype="multipart/form-data">

                                <input type="hidden" id="txtConsecutivo" name="txtConsecutivo" value="<?php echo $datos["Consecutivo"] ?>">

                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" value="<?php echo $datos["Nombre"] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea class="form-control" id="txtDescripcion" name="txtDescripcion"><?php echo $datos["Descripcion"] ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input type="text" class="form-control" id="txtPrecio" maxlength="8"
                                    onkeypress="return SoloNumeros(event)"
                                    name="txtPrecio" value="<?php echo $datos["Precio"] ?>">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Cantidad</label>
                                    <input type="text" class="form-control" id="txtCantidad" maxlength="3"
                                    onkeypress="return SoloNumeros(event)"
                                    name="txtCantidad" value="<?php echo $datos["Cantidad"] ?>">
                                </div>

                                <div class="mb-4 row">
                                    <div class="col-10">
                                        <label class="form-label">Imagen</label>
                                        <input type="file" class="form-control" id="txtImagen" name="txtImagen"
                                        accept="image/png, image/jpg, image/jpeg">
                                    </div>
                                    <div class="col-2">
                                        <img width='175' height='150' src="<?php echo $datos["Imagen"] ?>"></img>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Procesar" id="btnActualizarProducto"
                                    name="btnActualizarProducto">

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
    <script src="../js/Comunes.js"></script>

</body>

</html>