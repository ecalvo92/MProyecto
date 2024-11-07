<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/BaseDatos.php';

    function ConsultarUsuarioModel($consecutivo)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarUsuario('$consecutivo')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return null;
        }
    }

    function ConsultarUsuariosModel()
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ConsultarUsuarios()";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return null;
        }
    }

    function ActualizarPerfilModel($consecutivo,$identificacion,$nombre,$correo)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL ActualizarPerfil('$consecutivo','$identificacion','$nombre','$correo')";
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