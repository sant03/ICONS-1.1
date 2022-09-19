$(document).ready(function mostrarProductos(){
    $.ajax({
        url: '../../CONTROLLER/php/mostrarProductos.php',
        method: 'POST',
        data: {
            function: 'mostrarProductos'
        },
        success: function(data){
            $("#cont-pro-cards").html(data);
        },
        dataType: 'text'
    });

    //Mostrar Productos segun stock
    $(document).on("click", "#filtrarProductos", function (){
        let stockPro = $("#stockPro").val();
        
        function consultarAjax(query){
            $.ajax({
                url: '../../CONTROLLER/php/mostrarProductos.php',
                method: 'POST',
                data: {
                    function: 'mostrarProductosFilterBy',
                    q : query
                },
                success: function(data){
                    $("#cont-pro-cards").html(data);
                },
                dataType: 'text'
            });
        }

        if(stockPro == 'Stock'){
            let filterData = stockPro;
            let query = filterData;
            consultarAjax(query);
            
        } else if(stockPro == 'Agotado'){
            let filterData = stockPro;
            let query = filterData;
            consultarAjax(query);
        }else if(stockPro == 'Por agotarse'){
            let filterData = stockPro;
            let query = filterData;
            consultarAjax(query);
        }
    });

    

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
    
})

function añadirProducto(){

    var nuevoProducto = [];
    let referencia = document.getElementById("referencia").value;
    let precioVen = document.getElementById("precioVen").value;
    let precioCom = document.getElementById("precioCom").value;
    let minCom = document.getElementById("minCom").value;
    let codigoProducto = document.getElementById("codigoProducto").value;
    let categoria = document.getElementById("categoria").value;
    let descripcion = document.getElementById("descripcion").value;

    if(referencia == "" || precioVen == "" || precioCom == "" || minCom == "" || codigoProducto == "" || categoria == ""){
        alert('Por favor completa los datos de la venta');
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

function crearCategoria(){

    let nomCategoria = document.getElementById("nomCategoria").value;
    var nuevaCategoria = nomCategoria;

    if(nomCategoria == ""){
        alert('Por favor especifica un nombre para la categoria');
    }else{
        
        var query = nuevaCategoria;

        $.ajax({
            url: '../../CONTROLLER/php/crearCategoria.php',
            method: 'POST',
            data: {
                q : query
            },
            success: function(data){
                alert(data);
                location.reload();
            },
            dataType: 'text'
        });
    }
   
}
