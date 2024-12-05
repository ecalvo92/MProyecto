<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/CarritoModel.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST["btnRegistrarCarrito"]))
    {
        $consecutivoProducto = $_POST["ID_PRODUCTO"];
        $cantidad = $_POST["CANTIDAD"];
        
        $resultado = RegistrarCarritoModel($_SESSION["ConsecutivoUsuario"], $consecutivoProducto, $cantidad);

        if($resultado == true)
        {
            echo "OK";
        }
        else
        {
            echo "ERROR";
        }
    }

    function ConsultarCarrito()
    {
        return ConsultarCarritoModel($_SESSION["ConsecutivoUsuario"]);
    }
    
?>