<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/LoginModel.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/UsuarioModel.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST["btnActualizarAcceso"]))
    {
        $contrasennaActual = $_POST["txtContrasennaActual"];
        $contrasennaNueva = $_POST["txtContrasennaNueva"];
        $contrasennaConfirmar = $_POST["txtContrasennaConfirmar"];

        if($contrasennaActual == $contrasennaNueva)
        {
            $_POST["txtMensaje"] = "Debe ingresar una contraseña nueva";
        }
        else if($contrasennaNueva != $contrasennaConfirmar)
        {
            $_POST["txtMensaje"] = "Las nuevas contraseñas no coinciden";
        }
        else
        {
            $resultado = ActualizarContrasennaModel($_SESSION["ConsecutivoUsuario"], $contrasennaNueva);
        
            if($resultado == true)
            {
                header('location: ../../View/Login/home.php');
            }
            else
            {
                $_POST["txtMensaje"] = "Su contraseña no se ha actualizado correctamente";
            }
        }
    }

    function ConsultarUsuario($consecutivo)
    {
        $resultado = ConsultarUsuarioModel($consecutivo);

        if($resultado != null && $resultado -> num_rows > 0)
        {
            return mysqli_fetch_array($resultado);
        }
        else
        {
            $_POST["txtMensaje"] = "Su información no se ha obtenido correctamente";
            header('location: ../../View/Login/home.php');
        }

    }

    function ConsultarUsuarios()
    {
        $resultado = ConsultarUsuariosModel($_SESSION["ConsecutivoUsuario"]);

        if($resultado != null && $resultado -> num_rows > 0)
        {
            return $resultado;
        }
    }

    if(isset($_POST["btnActualizarPerfil"]))
    {
        $identificacion = $_POST["txtIdentificacion"];
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];

        $resultado = ActualizarPerfilModel($_SESSION["ConsecutivoUsuario"],$identificacion,$nombre,$correo,0);
        
        if($resultado == true)
        {
            $_SESSION["NombreUsuario"] = $nombre;
            header('location: ../../View/Login/home.php');
        }
        else
        {
            $_POST["txtMensaje"] = "Su información no se ha actualizado correctamente";
        }
    }

    if(isset($_POST["btnActualizarUsuario"]))
    {
        $consecutivo = $_POST["txtConsecutivo"];
        $identificacion = $_POST["txtIdentificacion"];
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $rol = $_POST["ddlRoles"];

        $resultado = ActualizarPerfilModel($consecutivo,$identificacion,$nombre,$correo,$rol);
        
        if($resultado == true)
        {
            $_SESSION["NombreUsuario"] = $nombre;
            header('location: ../../View/Usuario/consultarUsuarios.php');
        }
        else
        {
            $_POST["txtMensaje"] = "No fue posible actualizar la información del usuario";
        }
    }

    if(isset($_POST["btnCambiarEstadoUsuario"]))
    {
        $consecutivo = $_POST["txtConsecutivo"];

        $resultado = CambiarEstadoUsuarioModel($consecutivo);
        
        if($resultado == true)
        {
            header('location: ../../View/Usuario/consultarUsuarios.php');
        }
        else
        {
            $_POST["txtMensaje"] = "No fue posible actualizar el estado del usuario";
        }
    }

    function ConsultarRoles()
    {
        $resultado = ConsultarRolesModel();

        if($resultado != null && $resultado -> num_rows > 0)
        {
            return $resultado;
        }
    }
    

?>