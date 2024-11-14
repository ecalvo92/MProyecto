function ConsultarNombre()
{
    let identificacion = $("#txtIdentificacion").val();
    $("#txtNombre").val("");

    if(identificacion.length >= 9)
    {
        $.ajax({
            method: "GET",
            url: "https://apis.gometa.org/cedulas/" + identificacion,
            dataType : "json",
            success: function(data){
                $("#txtNombre").val(data.nombre);
            }
          });
    }
}