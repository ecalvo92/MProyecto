<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/LoginModel.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST["btnIniciarSesion"]))
    {
        $correo = $_POST["txtCorreo"];
        $contrasenna = $_POST["txtContrasenna"];

        $resultado = IniciarSesionModel($correo, $contrasenna);

        if($resultado != null && $resultado -> num_rows > 0)
        {
            $datos = mysqli_fetch_array($resultado);
            $_SESSION["NombreUsuario"] = $datos["Nombre"];

            header('location: ' . $_SERVER["DOCUMENT_ROOT"] . 'View/home.php');
        }
        else
        {
            session_destroy();
            $_POST["txtMensaje"] = "Su información no se ha validado correctamente";
        }
    }

    if(isset($_POST["btnCerrarSesion"]))
    {
        session_destroy();
        header('location: ' . $_SERVER["DOCUMENT_ROOT"] . '/View/home.php');
    }

    if(isset($_POST["btnRegistrarUsuario"]))
    {
        $identificacion = $_POST["txtIdentificacion"];
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $contrasenna = $_POST["txtContrasenna"];

        $resultado = RegistrarUsuarioModel($identificacion,$nombre,$correo,$contrasenna);

        if($resultado == true)
        {
            header('location: ' . $_SERVER["DOCUMENT_ROOT"] . '/View/Login/inicioSesion.php');
        }
        else
        {
            $_POST["txtMensaje"] = "Su información no se ha registrado correctamente";
        }
    }

    if(isset($_POST["btnRecuperarAcceso"]))
    {
        $correo = $_POST["txtCorreo"];

        RecuperarAccesoModel($correo);
    }

?>