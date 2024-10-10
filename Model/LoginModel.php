<?php
    include_once 'BaseDatos.php';

    function IniciarSesionModel($correo, $contrasenna)
    {
        $enlace = AbrirBD();

        //Ejecutar el procedimiento almacenado

        CerrarBD($enlace);
    }

    function RegistrarUsuarioModel($identificacion,$nombre,$correo,$contrasenna)
    {
        try
        {
            $enlace = AbrirBD();

            $sentencia = "CALL RegistrarUsuario('$identificacion','$nombre','$correo','$contrasenna')";
            $resultado = $enlace -> query($sentencia);

            CerrarBD($enlace);
            return $resultado;
        }
        catch(Exception $ex)
        {
            return false;
        }
    }

    function RecuperarAccesoModel($correo)
    {
        $enlace = AbrirBD();

        //Ejecutar el procedimiento almacenado

        CerrarBD($enlace);
    }

?>