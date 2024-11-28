function RegistrarCarritoJS(consecutivoProducto, unidades)
{
    let cantidadDeseada = $("#" + consecutivoProducto).val();

    if(cantidadDeseada > unidades)
    {
        alert("Debe ingresar una cantidad inferior al inventario disponible");
        return;
    }

    if(cantidadDeseada <= 0)
    {
        alert("Debe ingresar una cantidad válida");
        return;
    }

    //LLAMAMOS AL CONTROLADOR POR MEDIO AJAX
    $.ajax({
        method: "POST",
        url: "Controller/CarritoController.php",
        dataType : "text",
        data: {

        },
        success: function(data){
           
        }
    });

}