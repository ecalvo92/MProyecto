<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/ProductoController.php';
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
                            <h5 class="card-title fw-semibold mb-4">Registrar Producto</h5>

                            <?php
                                if(isset($_POST["txtMensaje"]))
                                {
                                    echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                                }
                            ?>

                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Descripción</label>
                                    <textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input type="text" class="form-control" id="txtPrecio" name="txtPrecio">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Cantidad</label>
                                    <input type="text" class="form-control" id="txtCantidad" name="txtCantidad">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Imagen</label>
                                    <input type="file" class="form-control" id="txtImagen" name="txtImagen"
                                    accept="image/png, image/jpg, image/jpeg">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Procesar" id="btnRegistrarProducto"
                                    name="btnRegistrarProducto">

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