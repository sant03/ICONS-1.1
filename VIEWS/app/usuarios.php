<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal - ICONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/home.css">
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
            <h1>Usuarios | <a href="profile.php" class="text-decoration-none text-success">Mi cuenta</a> </h1>
        </div>
        <div class="col-1">
            <img src="../assets/imagenes/image-12.svg" alt="" style="width:100px">
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
            <div class="col-6 d-flex mb-3">
                <input type="search" name="search" id="buscar" class="form-control me-2" placeholder="Buscar usuario">
                <button class="btn btn-primary">Buscar</button>
            </div>
            <div class="col-1 drop-up">
                <button class="btn btn-primary" data-bs-toggle="dropdown"><img src="../assets/imagenes/order-by.png" alt="" style="width:20px;"></button>
                <div class="dropdown-menu">
                    <div class="p-3">
                        <h6>Ordenar por <i class="bi bi-sort-alpha-down ms-4"></i></h6>
                        <hr>
                        <form action="" class="form-check">
                            <label for="" class="form-check-label">a-z</label>
                            <input type="checkbox" class="form-check-input">
                            <br>
                            <label for="" class="form-check-label">z-a</label>
                            <input type="checkbox" class="form-check-input">
                            <br>
                            <div class="mt-3">
                                <button type="button" class="btn btn-sm btn-primary" style="width:90px ;">Cancelar</button>
                                <button class="btn btn-sm btn-primary ms-3" style="width:90px ;">Aplicar</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        
        <h3 id="title">Todos</h3>
        <!--User cards-->
        <div class="row mt-3">
            <div class="col-9 overflow-auto" style="height:550px ;">
                <div class="row cont-usu-card">
                    <?php 
                    include ("../../CONTROLLER/php/showUsers.php");
                    ?>
                    <!--<div class="col-lg-2 col-sm-5 card shadow text-center p-3 me-4 mb-3">
                        <div class="card-header">
                            <img src="../assets/imagenes/user-icon.png" alt="" style="width:80px">
                        </div>
                        <div class="card-body">
                            <h6>Nombre</h6>
                        </div>
                    </div>-->
                </div>
            </div>

            <!--Filter user buttons-->
            <div class="col-3 m-auto text-center">
                <button type="button" class="btn btn-lg btn-primary mb-4" id="all" style="width:80%">Todos</button>
                <button class="btn btn-lg btn-info mb-4" id="userSearchAdmin" style="width:80%">Administrativo</button>
                <button class="btn btn-lg btn-success mb-4" id="userSearchGeren" style="width:80%">Gerencial</button>
                <button class="btn btn-lg btn-warning mb-4" id="userSearchAux" style="width:80%">Auxiliar</button>
            </div>
        </div>
    </section>
    
    <!--Script-->
    <script src="../../CONTROLLER/script/usuarios.js"></script>
    <script>
        $(document).ready(function(){
            $("#buscar").keyup(function(){
            var query = $("#buscar").val();
                if(query.length > 0 ){
                    $.ajax({
                        url: '../../CONTROLLER/php/autSearchUser.php',
                        method: 'POST',
                        data: {
                            search: 1,
                            q: query
                        },
                        success: function(data){
                            $(".cont-usu-card").html(data);
                        },
                        dataType: 'text'
                    });
                }else if(query.length == 0){
                    $.ajax({
                        url: '../../CONTROLLER/php/autSearchUserEmpty.php',
                        method: 'POST',
                        data: {
                            search: 1,
                            q: query
                        },
                        success: function(data){
                            $(".cont-usu-card").html(data);
                        },
                        dataType: 'text'
                    });
                }
            });

            $("#all").click(function(){
                var query = $("#buscar").val();
                $.ajax({
                    url: '../../CONTROLLER/php/autSearchUserEmpty.php',
                    method: 'POST',
                    data: {
                        search: 1,
                        q: query
                    },
                    success: function(data){
                        $(".cont-usu-card").html(data);
                    },
                    dataType: 'text'
                });
            });

            $(document).on("click", "#userSearchAdmin", function (){
                var query = $(this).text();
                $.ajax({
                    url: '../../CONTROLLER/php/searchUserAdmin.php',
                    method: 'POST',
                    data: {
                        search: 1,
                        q: query
                    },
                    success: function(data){
                        $(".cont-usu-card").html(data);
                    },
                    dataType: 'text'
                });
            });
            $(document).on("click", "#userSearchGeren", function (){
                var query = $(this).text();
                $.ajax({
                    url: '../../CONTROLLER/php/searchUserAdmin.php',
                    method: 'POST',
                    data: {
                        search: 1,
                        q: query
                    },
                    success: function(data){
                        $(".cont-usu-card").html(data);
                    },
                    dataType: 'text'
                });
            });
            $(document).on("click", "#userSearchAux", function (){
                var query = $(this).text();
                $.ajax({
                    url: '../../CONTROLLER/php/searchUserAdmin.php',
                    method: 'POST',
                    data: {
                        search: 1,
                        q: query
                    },
                    success: function(data){
                        $(".cont-usu-card").html(data);
                    },
                    dataType: 'text'
                });
            });
        });
    </script>
</body>
</html>