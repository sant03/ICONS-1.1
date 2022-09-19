$(document).ready(function mostrarProductos(){
    $.ajax({
        url: '../../CONTROLLER/php/mostrarClientes.php',
        method: 'POST',
        data: {
            function: 'mostrarClientes'
        },
        success: function(data){
            $("#cont-cli-cards").html(data);
        },
        dataType: 'text'
    });

    $(document).on("click", "#ordenarClientes", function (){
        //Registros ordenados del Mas reciente al mas antiguo
        if($("#AZ").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarClientes.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosAZ'
                },
                success: function(data){
                    $("#cont-cli-cards").html(data);
                },
                dataType: 'text'
            });  
        //Registros ordenados del Mas antiguo al mas reciente
        } else if($("#ZA").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarClientes.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosZA'
                },
                success: function(data){
                    $("#cont-cli-cards").html(data);
                },
                dataType: 'text'
            });
        }
    });
});