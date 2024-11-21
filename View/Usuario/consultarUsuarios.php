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

                            <h5 class="card-title">Consulta de Usuarios</h5>
                            <div class="table-responsive">
                                <table id="example" class="table text-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="border-2 border-bottom border-primary border-0">
                                            <th scope="col">#</th>
                                            <th scope="col">Identificación</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Rol</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                       
                                        <?php
                                            $datos = ConsultarUsuarios();
                                            While($fila = mysqli_fetch_array($datos))
                                            {
                                                echo "<tr>";
                                                echo "<td>" . $fila["Consecutivo"] . "</td>";
                                                echo "<td>" . $fila["Identificacion"] . "</td>";
                                                echo "<td>" . $fila["Nombre"] . "</td>";
                                                echo "<td>" . $fila["CorreoElectronico"] . "</td>";
                                                echo "<td>" . $fila["DescripcionActivo"] . "</td>";
                                                echo "<td>" . $fila["NombreRol"] . "</td>";
                                                echo '<td>

                                                        <a href="actualizarUsuario.php?id=' . $fila["Consecutivo"] . '" class="btn">
                                                            <i class="fa fa-edit" style="color:blue; font-size: 1.6em;"></i>
                                                        </a>

                                                        <button id="btnOpenModal" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                            data-id=' . $fila["Consecutivo"] . ' data-name="' . $fila["Nombre"] . '">
                                                            <i class="fa fa-trash" style="color:red; font-size: 1.6em;"></i>
                                                        </button>
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
    <script src="../js/ConsultarUsuarios.js"></script>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 700px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Confirmación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="POST">
                    <div class="modal-body">
                    
                        <input type="hidden" id="txtConsecutivo" name="txtConsecutivo">
                        ¿Desea cambiar el estado del usuario <label id="lblNombre"></label> ?

                    </div>
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Procesar"
                        id="btnCambiarEstadoUsuario" name="btnCambiarEstadoUsuario">
                    </div>
                </form>
                
            </div>
        </div>
    </div>

</body>

</html>