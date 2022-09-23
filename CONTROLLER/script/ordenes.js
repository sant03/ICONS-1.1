
$(document).ready(function mostrarOrdenes(){
    $.ajax({
        url: '../../CONTROLLER/php/mostrarOrdenes.php',
        method: 'POST',
        data: {
            function: 'mostrarOrdenes'
        },
        success: function(data){
            $("#cont-ord-cards").html(data);
        },
        dataType: 'text'
    });
});
