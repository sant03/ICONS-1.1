$(document).ready(function selecionarCategoria(){
    $.ajax({
        url: '../../CONTROLLER/php/consultarCategorias.php',
        method: 'POST',
        success: function(data){
            $("#categoria").html(data);
        },
        dataType: 'text'
    });

    //Auto buscador proveedores en formulario
    $("#proveedor").keyup(function(){
        var query = $("#proveedor").val();
        if(query.length > 0 ){
            $.ajax({
                url: '../../CONTROLLER/php/autSearchProv.php',
                method: 'POST',
                data: {
                    search: 1,
                    q: query
                },
                success: function(data){
                    $("#select-prov").html(data);
                },
                dataType: 'text'
            });
        }
    });

    $(document).on("click", ".search_prov", function (){
        var cliente = $(this).text();
        $("#proveedor").val(cliente);
        $("#select-prov").html("");
    });

    $("#buscarUsu").keyup(function(){
        var query = $("#buscarUsu").val();
        if(query.length > 0 ){
            $.ajax({
                url: '../../CONTROLLER/php/autSearchUser.php',
                method: 'POST',
                data: {
                    function: 'autoSearchUser2',
                    q: query
                },
                success: function(data){
                    $("#select-usu").html(data);
                },
                dataType: 'text'
            });
        }      
    });

    $(document).on("click", ".search_user", function (){
        var usuario = $(this).text();
        $("#buscarUsu").val(usuario);
        $("#select-usu").html("");
    });


    $.ajax({
        url: '../../CONTROLLER/php/consultarIdCompra.php',
        method: 'POST',
        success: function(data){
            $("#idOrd").html(data);
            $("#idOrd2").val(data);
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

function crearOrden(){

    var ordenCompra = [];
    let numOrd = document.getElementById("idOrd2").value;
    let estadoOrd = document.getElementById("estadoOrd").value;
    let fechaOrd = document.getElementById("fechaOrd").value;
    let proveedor = document.getElementById("proveedor").value;
    let totalCant = document.getElementById("totalCant").textContent;
    let totalOrd = document.getElementById("totalOrd").textContent;

    var productosOrden = [];
    $("#ord-table tr").each(function() {
        var tds = $("td", $(this));
        var datosProducto = {
            producto: $(tds[0]).text(),
            cantidad: $(tds[1]).text(),
            precio: $(tds[2]).text(),
            total: $(tds[3]).text()
        };

        productosOrden.push(datosProducto);
    });

    if(productosOrden.length === 1){
        alert('Por favor añada productos a la orden');
    }else{
        ordenCompra.push(estadoOrd,fechaOrd,proveedor,parseInt(totalCant),parseInt(totalOrd),numOrd);

        var query = {'array': JSON.stringify(ordenCompra)};
        var query2 = {'array2': JSON.stringify(productosOrden)};

        $.ajax({
            url: '../../CONTROLLER/php/registrarOrden.php',
            method: 'POST',
            dataType: 'json',
            data: {
                q : query['array'],
                q2 : query2['array2']
            },
            success: function(data){
                console.log(data);
            },
            dataType: 'text'
        })
        /*alert("Nueva orden creada exitosamente");
        window.location = '../../VIEWS/app/ordenes.php'*/
    }
}