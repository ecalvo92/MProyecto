<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/ProductoModel.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    function ConsultarProductos()
    {
        return ConsultarProductosModel();
    }
    

?>