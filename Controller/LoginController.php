<?php

    if(isset($_POST["btnIniciarSesion"]))
    {
        $correo = $_POST["txtCorreo"];
        $contrasenna = $_POST["txtContrasenna"];
    }

    if(isset($_POST["btnRegistrarUsuario"]))
    {
        $identificacion = $_POST["txtIdentificacion"];
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $contrasenna = $_POST["txtContrasenna"];
    }

?>