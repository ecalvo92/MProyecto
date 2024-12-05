function RegistrarCarritoJS(consecutivoProducto, unidades)
{
    let cantidadDeseada = $("#" + consecutivoProducto).val();

    if(cantidadDeseada > unidades)
    {
        MostrarMensaje("Debe ingresar una cantidad inferior al inventario disponible");
        return;
    }

    if(cantidadDeseada <= 0)
    {
        MostrarMensaje("Debe ingresar una cantidad válida");
        return;
    }

    $.ajax({
        method: "POST",
        url: "../../Controller/CarritoController.php",
        dataType : "text",
        data: {
            "btnRegistrarCarrito": "FUNCION",
            "ID_PRODUCTO": consecutivoProducto,
            "CANTIDAD": cantidadDeseada
        },
        success: function(data)
        {
           if(data == "OK")
           {
             MostrarMensajeOK("El producto fue actualizado correctamente en su carrito");
           }
           else
           {
            MostrarMensaje("El producto no fue actualizado en su carrito");
           }
        }
    });

}

function MostrarMensaje(texto)
{
    Swal.fire({
        title: "Información",
        text: texto,
        icon: "info"
      });
}

function MostrarMensajeOK(texto)
{
    Swal.fire({
        title: "Información",
        text: texto,
        icon: "success",
        confirmButtonText: "Aceptar"
      }).then((result) => {
        if (result.isConfirmed) {
         window.location.href = "home.php" 
        }
      });
}