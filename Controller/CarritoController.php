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

    function ConsultarResumenCarrito()
    {
        $resultado = ConsultarResumenCarritoModel($_SESSION["ConsecutivoUsuario"]);
        
        if($resultado != null && $resultado -> num_rows > 0)
        {
            $datos = mysqli_fetch_array($resultado);
            $_SESSION["CantidadCarrito"] = $datos["Cantidad"];
            $_SESSION["TotalCarrito"] = $datos["Total"];
        }
        else
        {
            $_SESSION["CantidadCarrito"] = "0";
            $_SESSION["TotalCarrito"] = "0";
        }
    
    }

    if(isset($_POST["btnRemoverProductoCarrito"]))
    {
        $consecutivoProducto = $_POST["txtConsecutivoProducto"];

        $resultado = RemoverProductoCarritoModel($_SESSION["ConsecutivoUsuario"], $consecutivoProducto);
        
        if($resultado == true)
        {
            header('location: ../../View/Carrito/consultarCarrito.php');
        }
        else
        {
            $_POST["txtMensaje"] = "No fue posible remover el producto de su carrito";
        }
    }    
    
?>