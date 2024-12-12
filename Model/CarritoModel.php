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

    function PagarCarritoModel($consecutivoUsuario)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL PagarCarrito('$consecutivoUsuario')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }

    function ConsultarFacturasModel($consecutivo)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarFacturas('$consecutivo')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return null;
        }
    }

    function ConsultarDetalleFacturaModel($id)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarDetalleFactura('$id')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return null;
        }
    }
    

?>