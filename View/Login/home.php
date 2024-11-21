<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/View/layout.php';
?>

<!doctype html>
<html lang="en">

<?php
    ReferenciasCSS();
?>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
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

                </div>
            </div>
        </div>
    </div>

    <?php
        ReferenciasJS();
    ?>

</body>

</html>