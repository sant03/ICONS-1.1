$(document).ready(function selecionarCategoria(){
    $.ajax({
        url: '../../CONTROLLER/php/consultarCategorias.php',
        method: 'POST',
        success: function(data){
            $("#categoria").html(data);
        },
        dataType: 'text'
    });

    $.ajax({
        url: '../../CONTROLLER/php/consultarIdCompra.php',
        method: 'POST',
        success: function(data){
            $("#idOrd").html(data);
        },
        dataType: 'text'
    });
});

function buscarProductos(){
    let categoria = $("#categoria").val();

    var query = categoria;

    $.ajax({
        url: '../../CONTROLLER/php/mostrarProductos.php',
        method: 'POST',
        data: {
            function: 'mostrarProductosFilterBy2',
            q : query
        },
        success: function(data){
            $("#cont-pro-cards").html(data);
        },
            dataType: 'text'
    });
}