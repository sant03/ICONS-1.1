//Calcular total venta en formulario de registro
function calcularTotal(){
    var cantidad = document.getElementById("cantidad").value;
    var precioPro = document.getElementById("precio").value;
    var operacion = cantidad * precioPro
    document.getElementById("total").value = operacion;
}
calcularTotal();

//Mostrar registros de ventas
$(document).ready(function mostrarRegistrosCompras(){
    $.ajax({
        url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
        method: 'POST',
        data: {
            function: 'mostrarRegistros'
        },
        success: function(data){
            $("#purchaseTable").html(data);
        },
        dataType: 'text'
    });

    //Mostrar registros de ventas ordenados por determinado parametro

    $(document).on("click", "#ordenarCompra", function (){
        //Registros ordenados del Mas reciente al mas antiguo
        if($("#MRP").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosMRP'
                },
                success: function(data){
                    $("#purchaseTable").html(data);
                },
                dataType: 'text'
            });  

        //Registros ordenados del Mas antiguo al mas reciente
        } else if($("#MAP").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosMAP'
                },
                success: function(data){
                    $("#purchaseTable").html(data);
                },
                dataType: 'text'
            }); 

        //Registros ordenados por nombre del cliente por orden alfabetico A-Z   
        } else if($("#AZ").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosAZ'
                },
                success: function(data){
                    $("#purchaseTable").html(data);
                },
                dataType: 'text'
            }); 
        
        //Registros ordenados por nombre del cliente por orden alfabetico Z-A
        } else if($("#ZA").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosZA'
                },
                success: function(data){
                    $("#purchaseTable").html(data);
                },
                dataType: 'text'
            });

        //Registros ordenados por total de venta de Mayor a menor   
        } else if($("#Mm").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosMm'
                },
                success: function(data){
                    $("#purchaseTable").html(data);
                },
                dataType: 'text'
            });
        
        //Registros ordenados por total de venta de menor a Mayor   
        } else if($("#mM").is(':checked')) {  
            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosmM'
                },
                success: function(data){
                    $("#purchaseTable").html(data);
                },
                dataType: 'text'
            });    
        }  
    });

    //Mostrar registros de ventas segun parametros
    $(document).on("click", "#filtrarCompra", function (){
        let purchaseDate = $("#purchaseDate").val();
        let purchaseCode = $("#purchaseCode").val();
        let product = $("#product").val();
        let proveedor = $("#proveedor").val();

        if(purchaseDate == '' && product == '' && proveedor == '' && purchaseCode == ''){
            alert('Ningun filtro aplicado');
            location.reload();
        } else{
            var filterData = [];
            filterData.push(purchaseDate,product,proveedor,parseInt(purchaseCode));
            var query = {'array': JSON.stringify(filterData)};

            $.ajax({
                url: '../../CONTROLLER/php/mostrarRegistrosCompra.php',
                method: 'POST',
                data: {
                    function: 'mostrarRegistrosFilterBy',
                    q : query['array']
                },
                success: function(data){
                    $("#purchaseTable").html(data);
                },
                dataType: 'text'
            });

        }
    });
    
})


//Consultar Id de compras 
$(document).on("click", "#nuevaCompra", function (){
    $.ajax({
        url: '../../CONTROLLER/php/consultarIdCompra.php',
        method: 'POST',
        success: function(data){
            $("#idCom").html(data);
            $("#numCom").val(data);
        },
        dataType: 'text'
    });
});

//Imlementacion del registro de compras
function registrarCompra(){

    var registroCompra = [];
    let proveedor = document.getElementById("proveedor").value;
    let producto = document.getElementById("producto").value;
    let cantidad = document.getElementById("cantidad").value;
    let total = document.getElementById("total").value;
    let fecha = document.getElementById("fecha").value;
    let numCom = document.getElementById("numCom").value;
    let comentario = document.getElementById("coment").value;

    //Validacion del formulario
    if(proveedor == "" || producto == "" || cantidad == "" || fecha == ""){
        alert('Por favor ingrese los datos de la compra');
    }else{

        //Añadir los productos al arreglo que contiene los datos del registro
        registroCompra.push(proveedor,producto,parseInt(cantidad),fecha,parseInt(numCom),comentario,parseInt(total));
        
        //Solicitud a la base de datos
        var query = {'array': JSON.stringify(registroCompra)};

        $.ajax({
            url: '../../CONTROLLER/php/registrarCompra.php',
            method: 'POST',
            dataType: 'json',
            data: {
                q : query['array']
            },
            success: function(data){
                alert(data);
            },
            dataType: 'text'
        });
    }    
}