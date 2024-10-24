<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto Web Miércoles</title>
    <link rel="shortcut icon" type="image/png" href="../images/seodashlogo.png" />
    <link rel="stylesheet" href="../css/styles.min.css" />
</head>

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
                            <form>

                                <div class="mb-3">
                                    <label class="form-label">Contraseña Actual</label>
                                    <input type="email" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nueva Contraseña</label>
                                    <input type="email" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirmar Contraseña</label>
                                    <input type="password" class="form-control">
                                </div>
                              
                                <input type="submit" class="btn btn-primary" value="Procesar">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/simplebar.js"></script>
    <script src="../js/sidebarmenu.js"></script>
    <script src="../js/app.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>