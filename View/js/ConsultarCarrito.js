$(document).ready(function() {

    $("#example").DataTable({
        language: {
            url: '../js/es-ES.json'
        },
        columnDefs: [{ type:"string", target: [0,1,2,3]}]
    });

});

$(document).on("click", "#btnOpenModal", function(){

    $("#txtConsecutivoProducto").val($(this).attr('data-id'));
    $("#lblNombreProducto").text($(this).attr('data-name'));
});