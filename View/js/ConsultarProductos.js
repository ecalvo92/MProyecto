$(document).ready(function() {

    $("#example").DataTable({
        language: {
            url: '../js/es-ES.json'
        },
        columnDefs: [{ type:"string", target: [0,1,2,3,4,5]}]
    });

});