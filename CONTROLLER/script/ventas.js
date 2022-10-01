
//Calcular total venta en formulario de registro
function calcularTotal(){
    var cantidad = document.getElementById("cantidad").value;
    var precioPro = document.getElementById("precio").value;
    var operacion = cantidad * precioPro
    document.getElementById("total").value = operacion;
}
calcularTotal();

//Mostrar registros de ventas
$(document).ready(function mostrarRegistrosVentas(){
    $.ajax({
        url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
        method: 'POST',
        data: {
            function: 'mostrarRegistros'
        },
        success: function(data){
            $("#salesTable").html(data);
        },
        dataType: 'text'
    });

    //Mostrar registros de ventas ordenados por determinado parametro

    $(document).on("click", "#ordenarVenta", function (){
        //Registros ordenados del Mas reciente al mas antiguo
        if($("#MRP").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosMRP'
                },
                success: function(data){
                    $("#salesTable").html(data);
                },
                dataType: 'text'
            });  
        //Registros ordenados del Mas antiguo al mas reciente
        } else if($("#MAP").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosMAP'
                },
                success: function(data){
                    $("#salesTable").html(data);
                },
                dataType: 'text'
            }); 

        //Registros ordenados por nombre del cliente por orden alfabetico A-Z   
        } else if($("#AZ").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosAZ'
                },
                success: function(data){
                    $("#salesTable").html(data);
                },
                dataType: 'text'
            }); 
        
        //Registros ordenados por nombre del cliente por orden alfabetico Z-A
        } else if($("#ZA").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosZA'
                },
                success: function(data){
                    $("#salesTable").html(data);
                },
                dataType: 'text'
            });

        //Registros ordenados por total de venta de Mayor a menor   
        } else if($("#Mm").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosMm'
                },
                success: function(data){
                    $("#salesTable").html(data);
                },
                dataType: 'text'
            });
        
        //Registros ordenados por total de venta de menor a Mayor   
        } else if($("#mM").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosmM'
                },
                success: function(data){
                    $("#salesTable").html(data);
                },
                dataType: 'text'
            });    
        }  
    });

    //Filtrar registros de ventas segun parametros
    $(document).on("click", "#filtrarVenta", function (){
        let saleDate = $("#saleDate").val();
        let product = $("#product").val();
        let cliente = $("#cliente").val();
        let statePay = $("#statePay").val();
        let saleCode = $("#saleCode").val();

        if(saleDate == "" && product == "" && cliente == "" && statePay == 'NINGUNO' && saleCode == ""){
            alert('Ningun filtro aplicado');
            location.reload();
        } else{
            var filterData = [];
            filterData.push(saleDate,product,cliente,statePay,parseInt(saleCode));
            var query = {'array': JSON.stringify(filterData)};

            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosVenta.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosFilterBy',
                    q : query['array']
                },
                success: function(data){
                    $("#salesTable").html(data);
                },
                dataType: 'text'
            });

        }
    });
    
})

$(document).on("click", "#nuevaVenta", function (){
    $.ajax({
        url: '../../CONTROLLER/php/consultarIdVenta.php',
        method: 'POST',
        success: function(data){
            $("#idVen").html(data);
        },
        dataType: 'text'
    });
});

function registrarVenta(){


    var registroVenta = [];
    let cliente = document.getElementById("cliente").value;
    let producto = document.getElementById("producto").value;
    let cantidad = document.getElementById("cantidad").value;
    let total = document.getElementById("total").value;
    let fecha = document.getElementById("fecha").value;
    let estadoP = document.getElementById("estado").value;
    let comentario = document.getElementById("coment").value;

    if(cliente == "" || producto == "" || cantidad == "" || fecha == ""){
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