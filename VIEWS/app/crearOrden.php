<?php

include("../../CONTROLLER/php/config.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva orden - ICONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="icon" href="../assets/imagenes/icon.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="container-fluid">

    <!--Menu OffCanvas-->
    <div class="offcanvas offcanvas-start" id="menu" style="width:300px">
        <div class="offcanvas-header">
          <img src="../assets/imagenes/logo.jpeg" alt="" style="width:250px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body menu-link">
          <a href="home.php" class="text-decoration-none text-secondary fw-bold d-block p-3"><i class="bi bi-house-door-fill me-3"></i>Home</a>
          <a href="usuarios.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-people-fill me-3"></i>Usuarios</a>
          <a href="ventas.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-receipt me-3"></i>Ventas</a>
          <a href="compras.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-cart-fill me-3"></i>Compras</a>
          <a href="productos.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-tag-fill me-3"></i>Productos</a>  
          <a href="clientes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-person-check-fill me-3"></i>Clientes y Proveedores</a>
          <a href="ordenes.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-receipt-cutoff me-3"></i></i>Orden Compra</a>
          <a href="" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-gear-fill me-3"></i>Ajustes</a>
          <a href="../../CONTROLLER/php/logout.php" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-box-arrow-right me-3"></i>Salir</a>
        </div>
    </div>
      
      <!-- Menu -->
    <div class="row pt-3 fixed-top bg-light">
        <div class="col-1 m-auto">
            <button class="btn btn-outline-none fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
                <i class="bi bi-list me-2"></i> Menu
            </button>
        </div>

        <!--Header -->
        <div class="col-8 m-auto">
            <h1><a href="ordenes.php"><i class="bi bi-arrow-left-circle me-2"></i></a> Orden de compra</h1>
            <p class="fw-bold">Crear nueva orden de compra</p>
        </div>
        <div class="col-1">
            <img src="../assets/imagenes/image-10.svg" alt="" style="width:100px">
        </div>
        <div class="col-1 m-auto">
            <div class="dropdown">
                <h1 class="m-auto text-end" data-bs-toggle="dropdown"><i class="bi bi-bell-fill"></i></h1>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-exclamation-circle-fill text-danger"></i> Bolsa de 3 kilos <span class="text-danger">Por agotarse</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <div class="p-2">
                            <h6><i class="bi bi-receipt-cutoff text-success"></i> Nueva orden de compra disponible<span class="text-success"> 001</span></h3>
                        </div>
                    </li>
                    <li class="dropdown-item"></li>
                    
                </ul>
            </div>
        </div>
        <div class="col-1 m-auto">
            <div class="dropdown">
                <button class="btn btn-outline-none" data-bs-toggle="dropdown"><img src="../assets/imagenes/user-icon.png" alt="" style="width:70px ;" class="rounded rounded-circle img-thumbnail"></button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <h6><i class="bi bi-person-circle"></i> Mi perfil</h6>
                    </li>
                    <li class="dropdown-item">
                        <h6><i class="bi bi-question-circle-fill"></i> Ayuda</h6>
                    </li>
                    <li class="dropdown-item">
                        <h6><i class="bi bi-box-arrow-right"></i> Salir</h6>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="divider">
    </div>
      
    <br>
    <br>
    <br>

    <!--Main-->
    <section class="row mt-5 pt-5 ms-4 mb-4 overflow-hidden no-wrap">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h5>Datos de la orden</h5>
                    <form action="" class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="" class="form-label ">No orden</label>
                            <input type="text" name="" id="idOrd2" disabled class="form-control">
                        </div>
                        <div>
                            <label for="" class="form-label">Estado</label>
                            <select name="" id="estadoOrd" class="form-select">
                                <option value="Disponible">Disponible</option>
                                <option value="Usada">Usada</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="form-label">Fecha elaboracion</label>
                            <input type="date" name="" id="fechaOrd" class="form-control">
                        </div>
                        <div>
                            <label for="" class="form-label">Proveedor</label>
                            <input type="text" name="" id="proveedor" class="form-control" autoComplete="off">
                            <ul id="select-prov" class="list-group position-absolute"></ul>
                        </div>
                        <div>
                            <label for="" class="form-label">Elaborada por</label>
                            <input type="text" name="" id="buscarUsu" class="form-control" autoComplete="off">
                            <ul id="select-usu" class="list-group position-absolute"></ul>
                        </div>
                        <div>
                            <label for="" class="form-label">Area</label>
                            <input type="text" name="" id="" class="form-control" disabled>
                        </div>
                        <div>
                            <label for="" class="form-label">Forma de pago</label>
                            <select name="" id="" class="form-select">
                                <option value="De contado">De contado</option>
                                <option value="Credito">Credito</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="form-label">Fecha recepcion</label>
                            <input type="date" name="" id="" class="form-control" disabled>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <!--Buscar los productos a añadir-->
            <div class="row">
                <div class="col-7">
                    <h5>Seleccionar productos</h5>
                    <form action="" class="d-flex justify-content-between mb-3">
                        <div>
                            <label for="" class="form-label" >Categoria</label>
                            <select name="" id="categoria" class="form-select" onchange="buscarProductos()">
                                
                            </select>
                        </div>
                        <div>
                            <label for="" class="form-label">Codigo</label>
                            <input type="text" name="" id="codigo" class="form-control" disabled onkeyup="buscarProductos()">
                        </div>
                        <div>
                            <label for="" class="form-label">Referencia</label>
                            <input type="text" name="" id="referencia" class="form-control" disabled onkeyup="buscarProductos()">
                        </div>
                        <div>
                            <label for="" class="form-label">Estado</label>
                            <select name="" id="estado" class="form-select" disabled onchange="buscarProductos()">
                                <option value="Stock">Stock</option>
                                <option value="Por agotarse">Por agotarse</option>
                                <option value="Por agotarse">Agotado</option>
                            </select>
                        </div>
                    </form>
                </div>   
            </div>
            <!--Select Productos-->
            <div class="row border overflow-auto bg-light p-3 me-3" style="height:160px;" id="cont-pro-cards">

            </div>
            <hr>
            <div class="row mt-4">
                <div class="col d-flex justify-content-between">
                    <h5>Orden <span id="idOrd"></span></h5>
                    <button class="btn btn-primary" data-bs-toggle="dropdown"><img src="../assets/imagenes/order-by.png" alt=""
                        style="width:20px"></button>
                    <ul class="dropdown-menu">
                        <div class="p-3">
                            <h6>Ordenar por <i class="bi bi-sort-alpha-down ms-4"></i></h6>
                            <hr>
                            <form action="" class="form-check">
                                <h6 class="mt-4">Orden alfabetico <i class="bi bi-sort-alpha-down ms-5"></i></h6>
                                <hr>
                                <label for="" class="form-check-label">a-z</label>
                                <input type="checkbox" class="form-check-input">
                                <br>
                                <label for="" class="form-check-label">z-a</label>
                                <input type="checkbox" class="form-check-input">
                                <h6 class="mt-4">Cantidad <i class="bi bi-sort-numeric-down ms-5"></i> </h6>
                                <hr>
                                <label for="" class="form-check-label">Mayor a menor</label>
                                <input type="checkbox" class="form-check-input">
                                <br>
                                <label for="" class="form-check-label">Menor a mayor</label>
                                <input type="checkbox" class="form-check-input">
                            </form>
                            <div class="mt-3">
                                <button type="button" class="btn btn-sm btn-primary" style="width:90px ;">Cancelar</button>
                                <button class="btn btn-sm btn-primary ms-3" style="width:90px ;">Aplicar</button>
                            </div>
                        </div>
                    </ul>
                </div>
                
            </div>
            <div class="row">
                <div class="col p-5">
                    <table class="table table-striped table-hover text-center" id="ord-table">
                        <thead>
                          <tr>
                            <th>PRODUCTO</th>
                            <th>ORDENAR</th>
                            <th>PRECIO UNIDAD</th>
                            <th>TOTAL</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-between ps-4 pe-5">
                    <h5>Total productos a adquirir: <span class="p-2 rounded text-white bg-primary fw-bold ms-2" id="totalCant"></span></h5>
                    <h5>Total: $<span class="p-2 rounded text-white bg-primary fw-bold ms-2" id="totalOrd"></span></h5>
                </div>
                <div class="col-12 text-end mt-4 mb-4">
                    <button class="btn btn-lg btn-primary">Cancelar</button>
                    <button class="btn btn-lg btn-primary" onclick="crearOrden()">Guardar Orden</button>
                </div>
            </div>
        </div>
    </section>
    
    <script src="../../CONTROLLER/script/crearOrden.js"></script>
    <script>

        //Arrays donde se almacenan los totales y cantidad por producto a adquirir 
        var AcomuladorTotales = new Array();
        var AcomuladorCantidades = new Array();

        //Funcion al hacer click en el producto se debe añadir a la tabla de orden de compra
        $(document).on("click", ".product-card", function (){
            let cantidad = $(this).find('.cantidad').text();
            let referencia = $(this).find('.referencia').text();
            var minCompra;
            var precio;
            let query = referencia;

            //Consultar el minimo de compra por producto para calcular la cantidad a solicitar
            $.ajax({
                url: '../../CONTROLLER/php/mostrarProductos.php',
                async: false,
                method: 'POST',
                data: {
                    function: 'consultarMinCompra',
                    q : query
                },
                success: function(data){
                    minCompra = data;
                    
                },
                dataType: 'text'
            });

            //Consultar el precio de compra de cada producto para calcular el total por producto
            $.ajax({
                url: '../../CONTROLLER/php/mostrarProductos.php',
                async: false,
                method: 'POST',
                data: {
                    function: 'consultarPrecioCom',
                    q : query
                },
                success: function(data){
                    precio = data;
                    
                },
                dataType: 'text'
            });

            //Se calcula la cantidad a ordenar dependiendo del minimo de compra
            let ordenar = parseInt(minCompra) - parseInt(cantidad);
            if(Math.sign(ordenar) == -1){
                ordenar = 0;
            }

            //Se calcula el total por producto
            let total = ordenar * parseInt(precio);
            
            //Se añade el producto y los respectivos datos a la orden de compra
            var fila="<tr><td>"+referencia+"</td><td>"+ordenar+"</td><td>$ "+precio+"</td><td>"+total+"</td><td><button type='button' id='delete' class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt=''style='width:18px;'></button></td></tr>";
            $('#ord-table').on('click', '#delete', function(e){
                $(this).closest('tr').remove();
            })

            var btn = document.createElement("TR");
                btn.innerHTML=fila;
            document.getElementById("ord-table").appendChild(btn);

            //Por cada vez que se calcule un total por producto se añade al arreglo de totales de producto
            AcomuladorTotales.push(total);
            var totalOrd=0;

            //Calcular el total final de la orden
            for(let i of AcomuladorTotales) totalOrd+=i; 
            $('#totalOrd').text(+totalOrd);

            //Por cada vez que se calcule una cantidad por producto se añade al arreglo de cantidad de producto
            AcomuladorCantidades.push(ordenar);

            //Calcular el total de productos a adquirir
            var totalPro=0;
            for(let i of AcomuladorCantidades) totalPro+=i;

            $('#totalCant').text(totalPro);
        });
    </script>
</body>
</html>