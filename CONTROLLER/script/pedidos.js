$(document).ready(function mostrarPedidos(){
    $.ajax({
        url: '../../CONTROLLER/php/mostrarPedidos.php',
        method: 'POST',
        data: {
            function: 'mostrarPedidos'
        },
        success: function(data){
            $("#cont-ped-cards").html(data);
        },
        dataType: 'text'
    });

    $(document).on("click", "#ordenarPedidos", function (){
        //Registros ordenados del Mas reciente al mas antiguo
        if($("#MRP").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarPedidos.php',
                method: 'POST',
                data: {
                    function: 'mostrarPedidosMRP'
                },
                success: function(data){
                    $("#cont-ped-cards").html(data);
                },
                dataType: 'text'
            });  
        //Registros ordenados del Mas antiguo al mas reciente
        } else if($("#MAP").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarPedidos.php',
                method: 'POST',
                data: {
                    function: 'mostrarPedidosMAP'
                },
                success: function(data){
                    $("#cont-ped-cards").html(data);
                },
                dataType: 'text'
            }); 

        //Registros ordenados por nombre del cliente por orden alfabetico A-Z   
        } else if($("#AZ").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarPedidos.php',
                method: 'POST',
                data: {
                    function: 'mostrarPedidosAZ'
                },
                success: function(data){
                    $("#cont-ped-cards").html(data);
                },
                dataType: 'text'
            }); 
        
        //Registros ordenados por nombre del cliente por orden alfabetico Z-A
        } else if($("#ZA").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarPedidos.php',
                method: 'POST',
                data: {
                    function: 'mostrarPedidosZA'
                },
                success: function(data){
                    $("#cont-ped-cards").html(data);
                },
                dataType: 'text'
            });

        //Registros ordenados por total de venta de Mayor a menor   
        } else if($("#Mm").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarPedidos.php',
                method: 'POST',
                data: {
                    function: 'mostrarPedidosMm'
                },
                success: function(data){
                    $("#cont-ped-cards").html(data);
                },
                dataType: 'text'
            });
        
        //Registros ordenados por total de venta de menor a Mayor   
        } else if($("#mM").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarPedidos.php',
                method: 'POST',
                data: {
                    function: 'mostrarPedidosmM'
                },
                success: function(data){
                    $("#cont-ped-cards").html(data);
                },
                dataType: 'text'
            });    
        }  
    });

    //Mostrar Productos segun stock
    
    $(document).on("click", ".nameProduct", function (){
        var query = $(this).text();
        $.ajax({
            url: '../../CONTROLLER/php/mostrarProductos.php',
            method: 'POST',
            data: {
                function: 'mostrarInfoProducto',
                q : query
            },
            success: function(data){
                $("#cont-info-producto").html(data);
            },
            dataType: 'text'
        });
        
    }); 

    $(document).on("click", "#nuevoPedido", function (){
        $.ajax({
            url: '../../CONTROLLER/php/consultarIdPedido.php',
            method: 'POST',
            success: function(data){
                $("#idPed").html(data);
                $("#idPed2").val(data);
            },
            dataType: 'text'
        });
    });
    
})

function registrarPedidos(){


    var registroPedido = [];
    let cliente = document.getElementById("cliente").value;
    let productos = [];
    let cantidad = [];
    let total = document.getElementById("total").value;
    let fecha = document.getElementById("fecha").value;
    let estadoP = document.getElementById("estado").value;
    let comentario = document.getElementById("coment").value;
    
    if(cliente == "" || fecha == ""){
        alert('Por favor ingrese los datos de la venta');
    }else{
        registroVenta.push(cliente,producto,parseInt(cantidad),fecha,estadoP,comentario,parseInt(total));
        
        var query = {'array': JSON.stringify(registroVenta)};
    
            $.ajax({
                url: '../../CONTROLLER/php/registrarVenta.php',
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