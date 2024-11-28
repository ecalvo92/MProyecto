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
            header('location: ../../View/Producto/consultarProductos.php');
        }
        else
        {
            $_POST["txtMensaje"] = "El producto no se ha registrado correctamente";
        }
    }
    
?>