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

function añadirCliente(){

    var nuevoCliente = [];
    let nombreCliente = document.getElementById("nombreCliente").value;
    let dirCliente = document.getElementById("dirCliente").value;
    let telCliente = document.getElementById("telCliente").value;
    let emailCliente = document.getElementById("emailCliente").value;

    if(nombreCliente == ""){
        alert('Por favor ingresa un nombre para el nuevo cliente');
    }else{
        nuevoProducto.push(referencia,parseInt(precioVen),parseInt(precioCom),parseInt(minCom),codigoProducto,categoria,descripcion);
        
        var query = {'array': JSON.stringify(nuevoProducto)};

        $.ajax({
            url: '../../CONTROLLER/php/añadirProducto.php',
            method: 'POST',
            dataType: 'json',
            data: {
                q : query['array']
            },
            success: function(data){
                alert(data);
                location.reload();
            },
            dataType: 'text'
        });
    }

}