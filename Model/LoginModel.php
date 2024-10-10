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
        $enlace = AbrirBD();

        //Ejecutar el procedimiento almacenado

        CerrarBD($enlace);
    }

    function RecuperarAccesoModel($correo)
    {
        $enlace = AbrirBD();

        //Ejecutar el procedimiento almacenado

        CerrarBD($enlace);
    }

?>