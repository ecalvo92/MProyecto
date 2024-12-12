<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/CarritoController.php';

    $id = $_GET["id"];
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

                            <h5 class="card-title">Factura # <?php echo $id ?> </h5>

                            <div class="table-responsive">
                                <table id="example" class="table text-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="border-2 border-bottom border-primary border-0">
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">

                                        <?php
                                            $datos = ConsultarDetalleFactura($id);
                                            While($fila = mysqli_fetch_array($datos))
                                            {
                                                echo "<tr>";
                                                echo "<td>" . $fila["ConsecutivoProducto"] . " - " . $fila["Nombre"] . "</td>";
                                                echo "<td>" . $fila["Cantidad"] . "</td>";
                                                echo "<td>" . number_format($fila["Precio"],2) . "</td>";
                                                echo "<td>¢ " . number_format($fila["Total"],2) . "</td>";
                                                echo "</tr>";   
                                            }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
        ReferenciasJS();
    ?>
    <script src="../js/ConsultarFacturas.js"></script>

</body>

</html>