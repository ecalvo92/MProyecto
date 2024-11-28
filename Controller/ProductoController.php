<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/Model/ProductoModel.php';

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    function ConsultarProductos()
    {
        return ConsultarProductosModel();
    }

    function ConsultarProducto($consecutivo)
    {
        $resultado = ConsultarProductoModel($consecutivo);

        if($resultado != null && $resultado -> num_rows > 0)
        {
            return mysqli_fetch_array($resultado);
        }
        else
        {
            $_POST["txtMensaje"] = "La información del producto no se ha obtenido correctamente";
            header('location: ../../View/Producto/consultarProductos.php');
        }
    }
    
    if(isset($_POST["btnRegistrarProducto"]))
    {
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = '/View/products_images/' . $_FILES["txtImagen"]["name"];

        $origen = $_FILES["txtImagen"]["tmp_name"];
        $destino = $_SERVER["DOCUMENT_ROOT"] . '/View/products_images/' .  $_FILES["txtImagen"]["name"];
        copy($origen,$destino);

        $resultado = RegistrarProductoModel($nombre,$descripcion,$precio,$cantidad,$imagen);

        if($resultado == true)
        {
            header('location: ../../View/Producto/consultarProductos.php');
        }
        else
        {
            $_POST["txtMensaje"] = "El producto no se ha registrado correctamente";
        }
    }

    if(isset($_POST["btnActualizarProducto"]))
    {
        $consecutivo = $_POST["txtConsecutivo"];
        $nombre = $_POST["txtNombre"];
        $descripcion = $_POST["txtDescripcion"];
        $precio = $_POST["txtPrecio"];
        $cantidad = $_POST["txtCantidad"];
        $imagen = "";

        if($_FILES["txtImagen"]["name"] != "")
        {
            $imagen = '/View/products_images/' . $_FILES["txtImagen"]["name"];

            $origen = $_FILES["txtImagen"]["tmp_name"];
            $destino = $_SERVER["DOCUMENT_ROOT"] . '/View/products_images/' .  $_FILES["txtImagen"]["name"];
            copy($origen,$destino);
        }

        $resultado = ActualizarProductoModel($consecutivo,$nombre,$descripcion,$precio,$cantidad,$imagen);

        if($resultado == true)
        {
            header('location: ../../View/Producto/consultarProductos.php');
        }
        else
        {
            $_POST["txtMensaje"] = "El producto no se ha actualizado correctamente";
        }
        
    }

?>