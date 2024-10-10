<?php
    include_once '../../Model/LoginModel.php';

    if(isset($_POST["btnIniciarSesion"]))
    {
        $correo = $_POST["txtCorreo"];
        $contrasenna = $_POST["txtContrasenna"];

        IniciarSesionModel($correo, $contrasenna);
    }

    if(isset($_POST["btnRegistrarUsuario"]))
    {
        $identificacion = $_POST["txtIdentificacion"];
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $contrasenna = $_POST["txtContrasenna"];

        RegistrarUsuarioModel($identificacion,$nombre,$correo,$contrasenna);
    }

    if(isset($_POST["btnRecuperarAcceso"]))
    {
        $correo = $_POST["txtCorreo"];

        RecuperarAccesoModel($correo);
    }

?>