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
    <title>Proveedores - ICONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/proveedores.css">
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
          <a href="#" class="text-decoration-none text-secondary fw-bold d-block p-3 "><i class="bi bi-gear-fill me-3"></i>Ajustes</a>
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
            <h1><a href="clientes.php" class="text-decoration-none text-success">Clientes</a> | Proveedores</h1>
        </div>
        <div class="col-1">
            <img src="../assets/imagenes/image-11.svg" alt="" style="width:100px">
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

    <!--Main-->
    <section class="row mt-5 pt-5 ms-4 mb-4 overflow-hidden no-wrap">
        <div class="row d-flex justify-content-between">
            <form action="" class="col-6 d-flex mb-3">
                <input type="text" id="buscar" class="form-control me-2" placeholder="Buscar proveedores" autoComplete="off">
                <button class="btn btn-primary">Buscar</button>
            </form>
            <div class="col-2">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#añadirProvModal"> Añadir Proveedor</button>
                <div class="modal fade" id="añadirProvModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                  
                        <!-- Modal Header -->
                        <div class="modal-header">
                         <div>
                            <h4 class="modal-title">Añadir nuevo proveedor</h4>
                         </div>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                  
                        <!-- Modal body -->
                        <div class="modal-body">
                          <form action="">
                            <label for="" class="form-label fw-bold">Nombre </label>
                            <input type="text" id="nombreProveedor" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Direccion </label>
                            <input type="text" id="dirProveedor" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Telefono </label>
                            <input type="number" id="telProveedor" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Email </label>
                            <input type="email" id="emailProveedor" class="form-control mb-2">
                          </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" id="añadirProveedor">Añadir proveedor</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-1 drop-up">
                <button class="btn btn-primary" data-bs-toggle="dropdown"><img src="../assets/imagenes/order-by.png" alt="" style="width:20px;"></button>
                <div class="dropdown-menu">
                    <div class="p-3">
                        <h6>Ordenar por <i class="bi bi-sort-alpha-down ms-4"></i></h6>
                        <hr>
                        <form action="" class="form-check ms-0 ps-0">
                            <h6 class="mt-4">Orden alfabetico <i class="bi bi-sort-alpha-down ms-5"></i></h6>
                            <hr>
                            <div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input radios" id="AZ" name="optradio" value="a-z" checked>
                                    <label class="form-check-label" for="">a-z</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input radios" id="ZA" name="optradio" value="z-a" checked>
                                    <label class="form-check-label" for="">z-a</label>
                                </div>
                            </div>
                        </form>
                        <div class="mt-3">
                            <button type="button" class="btn btn-sm btn-primary" style="width:90px ;">Cancelar</button>
                            <button class="btn btn-sm btn-primary ms-3" id="ordenarProveedores" style="width:90px;">Aplicar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <!--Cliente cards-->
        <div class="row mt-3">
            <div class="col-9 overflow-auto" style="height:550px ;">
                <div class="row">
                    <div class="col-11">
                        <h3>Todos</h3>
                        <div class="row" id="cont-prov-cards">
                            <div class="col-lg-7 col-sm-5 card shadow text-center me-4 mb-3">
                                <div class="card-body d-flex">
                                    <img src="../assets/imagenes/user-icon.png" alt="" style="width:60px">
                                    <h4 class="align-self-center ms-4">Nombre</h4>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-5 card shadow text-center me-4 mb-3">
                                <div class="card-body d-flex ">
                                    <img src="../assets/imagenes/user-icon.png" alt="" style="width:60px">
                                    <h4 class="align-self-center ms-4">Nombre</h4>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-5 card shadow text-center me-4 mb-3">
                                <div class="card-body d-flex ">
                                    <img src="../assets/imagenes/user-icon.png" alt="" style="width:60px">
                                    <h4 class="align-self-center ms-4">Nombre</h4>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-5 card shadow text-center me-4 mb-3">
                                <div class="card-body d-flex ">
                                    <img src="../assets/imagenes/user-icon.png" alt="" style="width:60px">
                                    <h4 class="align-self-center ms-4">Nombre</h4>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-5 card shadow text-center me-4 mb-3">
                                <div class="card-body d-flex ">
                                    <img src="../assets/imagenes/user-icon.png" alt="" style="width:60px">
                                    <h4 class="align-self-center ms-4">Nombre</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Card Product-->
            <div class="col-3 m-auto text-center">
                <div class="card shadow mb-3" id="cont-info-proveedor">
                    
                </div>

                <div class="modal fade text-start" id="editarProvModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <div>
                                    <h4 class="modal-title">Editar informacion de proveedor</h4>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="">
                                    <label for="" class="form-label fw-bold">Nombre: </label>
                                    <input type="number" class="form-control mb-2">
                                    <label for="" class="form-label fw-bold">Direccion: </label>
                                    <input type="number" class="form-control mb-2">
                                    <label for="" class="form-label fw-bold">Telefono: </label>
                                    <input type="number" class="form-control mb-2">
                                    <label for="" class="form-label fw-bold">Email: </label>
                                    <input type="number" class="form-control mb-2">
                                </form>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">Guardar</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Script-->
    <script src="../../CONTROLLER/script/proveedores.js"></script>
    <script>
        $(document).ready(function(){
            $("#buscar").keyup(function(){
            var query = $("#buscar").val();
                if(query.length > 0 ){
                    $.ajax({
                        url: '../../CONTROLLER/php/mostrarProveedores.php',
                        method: 'POST',
                        data: {
                            function: 'autSearchProv',
                            q: query
                        },
                        success: function(data){
                            $("#cont-prov-cards").html(data);
                        },
                        dataType: 'text'
                    });
                }else if(query.length == 0){
                    $.ajax({
                        url: '../../CONTROLLER/php/mostrarProveedores.php',
                        method: 'POST',
                        data: {
                            function: 'autSearchProvEmpty',
                            q: query
                        },
                        success: function(data){
                            $("#cont-prov-cards").html(data);
                        },
                        dataType: 'text'
                    });
                }
            });

            //Funcion añadir un cliente
            $(document).on("click", "#añadirProveedor", function (){
                var nuevoProveedor = [];
                let nombreProveedor = document.getElementById("nombreProveedor").value;
                let dirProveedor = document.getElementById("dirProveedor").value;
                let telProveedor = document.getElementById("telProveedor").value;
                let emailProveedor = document.getElementById("emailProveedor").value;

                if(nombreProveedor == ""){
                    alert('Por favor ingresa un nombre para el nuevo proveedor');
                }else{
                    nuevoProveedor.push(nombreProveedor,dirProveedor,parseInt(telProveedor),emailProveedor);
                    
                    var query = {'array': JSON.stringify(nuevoProveedor)};

                    $.ajax({
                        url: '../../CONTROLLER/php/añadirProveedor.php',
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
            });

            $(document).on("click", ".nameProveedor", function (){
                var query = $(this).text();
                $.ajax({
                    url: '../../CONTROLLER/php/mostrarProveedores.php',
                    method: 'POST',
                    data: {
                        function: 'mostrarInfoProveedor',
                        q : query
                    },
                    success: function(data){
                        $("#cont-info-proveedor").html(data);
                    },
                    dataType: 'text'
                });
            }); 
        });
    </script>
</body>
</html>