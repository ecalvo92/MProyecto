<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/BaseDatos.php';

    function RegistrarCarritoModel($ConsecutivoUsuario,$ConsecutivoProducto,$cantidad)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL RegistrarCarrito('$ConsecutivoUsuario','$ConsecutivoProducto','$cantidad')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }

    function ConsultarCarritoModel($consecutivo)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarCarrito('$consecutivo')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return null;
        }
    }

    function ConsultarResumenCarritoModel($consecutivo)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarResumenCarrito('$consecutivo')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return null;
        }
    }


    function RemoverProductoCarritoModel($consecutivoUsuario, $consecutivoProducto)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL RemoverProductoCarrito('$consecutivoUsuario','$consecutivoProducto')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }

?>