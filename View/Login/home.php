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

                    <?php
                        if(isset($_POST["txtMensaje"]))
                        {
                            echo '<div class="alert alert-info Centrado">' . $_POST["txtMensaje"] . '</div>';
                        }
                    ?>

                    <?php
                            $datos = ConsultarProductos();
                            While($fila = mysqli_fetch_array($datos))
                            {
                                echo '
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div style="text-align:center">
                                            <img class="card-img-top" src="' . $fila["Imagen"] . '" style="width:175px; height:150px; margin-top:20px">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">' . $fila["Nombre"] . '</h5>
                                            <p class="card-text" style="text-align:justify;">' . $fila["Descripcion"] . '</p>
                                            <a href="#" class="btn btn-primary">Añadir</a>
                                        </div>
                                    </div>
                                </div>
                                ';

                                //if(isset($_SESSION["NombreUsuario"]))
                                //{
                                //}
                            }
                        ?>

                </div>
            </div>
        </div>
    </div>

    <?php
        ReferenciasJS();
    ?>

</body>

</html>