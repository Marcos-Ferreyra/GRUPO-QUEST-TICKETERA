function init(){
    $("#ticket_form").on("submit", function(e){

        guardaryeditar(e);
    })
}
$(document).ready(function() {
    // Inicializar Summernote en el elemento con id 'ticket_descrip'
    $('#tick_descrip').summernote({
        height: 200
    });

    // Hacer una solicitud POST al controlador para obtener las categorías
    $.post("../../controllers/categoria.php?op=combo", function(data, status) {
        // Rellenar el elemento con id 'cat_id' con el HTML recibido
   
        $('#cat_id').html(data);
    });
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url: "../../controllers/ticket.php?op=insert",
        type: "POST",
        data: formData
        contenType: false,
        processData: false,
        success: function(datos){
            console.log(datos);


        }

    })

}

init();
