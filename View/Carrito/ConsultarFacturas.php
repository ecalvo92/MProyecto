<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Controller/CarritoController.php';
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

                            <h5 class="card-title">Mis Compras</h5>

                            <div class="table-responsive">
                                <table id="example" class="table text-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="border-2 border-bottom border-primary border-0">
                                            <th scope="col"># Factura</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">

                                        <?php
                                            $datos = ConsultarFacturas();
                                            While($fila = mysqli_fetch_array($datos))
                                            {
                                                echo "<tr>";
                                                echo "<td>" . $fila["Consecutivo"] . "</td>";
                                                echo "<td>" . $fila["Nombre"] . "</td>";
                                                echo "<td>" . $fila["Fecha"] . "</td>";
                                                echo "<td>¢ " . number_format($fila["Total"],2) . "</td>";
                                                echo '<td>

                                                <a href="consultarDetalleFactura.php?id=' . $fila["Consecutivo"] . '" class="btn">
                                                    <i class="fa fa-eye" style="color:blue; font-size: 1.6em;"></i>
                                                </a>

                                              </td>';
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