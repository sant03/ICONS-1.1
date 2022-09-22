$(document).ready(function mostrarProveedores(){
    $.ajax({
        url: '../../CONTROLLER/php/mostrarProveedores.php',
        method: 'POST',
        data: {
            function: 'mostrarProveedores'
        },
        success: function(data){
            $("#cont-prov-cards").html(data);
        },
        dataType: 'text'
    });

    $(document).on("click", "#ordenarProveedores", function (){
        //Registros ordenados del Mas reciente al mas antiguo
        if($("#AZ").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarProveedores.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosAZ'
                },
                success: function(data){
                    $("#cont-prov-cards").html(data);
                },
                dataType: 'text'
            });  
        //Registros ordenados del Mas antiguo al mas reciente
        } else if($("#ZA").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarProveedores.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosZA'
                },
                success: function(data){
                    $("#cont-prov-cards").html(data);
                },
                dataType: 'text'
            });
        }
    });

});