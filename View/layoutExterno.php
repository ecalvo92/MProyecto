<?php
    
    function ReferenciasCSS()
    {
        echo '
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Proyecto Web Miércoles</title>
                <link rel="shortcut icon" type="image/png" href="../images/seodashlogo.png" />
                <link rel="stylesheet" href="../css/styles.min.css" />
                <link rel="stylesheet" href="../css/sistema.css" />
                <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
            </head>';
    }

    function ReferenciasJS()
    {
        echo '
            <script src="../js/jquery.min.js"></script>
            <script src="../js/bootstrap.bundle.min.js"></script>
            <script src="../js/simplebar.js"></script>
            <script src="../js/sidebarmenu.js"></script>
            <script src="../js/app.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
            <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
            <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
        ';
    }

?>