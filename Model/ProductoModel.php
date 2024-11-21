<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/BaseDatos.php';

    function ConsultarProductosModel()
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarProductos()";
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