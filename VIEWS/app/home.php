<?php

include("../../CONTROLLER/php/config.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: login.php");
}
$idUser = $_SESSION['id_usuario'];
$consulta = "SELECT usu_id, usu_nombres, usu_apellidos FROM usuario WHERE usu_id = '$idUser'";
$resultado = $conex->query($consulta);
$row = $resultado->fetch_assoc();

?>


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
    <link rel="icon" href="../assets/imagenes/icon.png">
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
        <div class="col-2 m-auto">
            <button class="btn btn-lg btn-outline-none fw-bold" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
                <i class="bi bi-list me-2"></i> Menu
            </button>
        </div>

        <!--Header -->
        <div class="col-8 m-auto">
            <h1>Bienvenido,
                <span>
                    <?php
                        echo utf8_decode($row['usu_nombres']." ". $row['usu_apellidos']);                     
                    ?>
                </span>
            </h1>
            <p class="text-success fw-bold" id="fecha">
                <span id="hours"></span>:
                <span id="minutes"></span> 
                <span id="seconds"></span> 
                <span id="am_or_pm"></span>
                <?php
                    date_default_timezone_set('America/Bogota');
                    $fecha=date('- l j  F Y');
                    echo $fecha;
                ?>
            </p>
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
                    <li class="dropdown-item bg-light">
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
        <h3>Modulos del sistema</h3>
        <hr>
        <article class="col-lg-3 col-sm-5 bg-light p-4 m-2 mt-5 me-4 rounded text-center shadow">
            <img src="../assets/imagenes/user-img-link.png" alt="" class="mb-5" style="width:100px">
            <ul class="list-group mb-2">
                <li class="list-group-item">
                    <h6>Visualice usuarios</h6>
                </li>
                <li class="list-group-item">
                    <h6>Consulte informacion de usuarios</h6>
                </li>
                <li class="list-group-item">
                    <h6>Acceda a su perfil</h6>
                </li>
            </ul>
            <a href="usuarios.html" class="btn btn-lg btn-primary rounded mt-5 " style="width:100% ;">Usuarios</a>
        </article>
        <article class="col-lg-3 col-sm-5 bg-light p-4 m-2 mt-5 me-4 rounded text-center shadow">
            <img src="../assets/imagenes/venta-img-link.png" alt="" class="mb-5" style="width:100px">
            <ul class="list-group mb-4">
                <li class="list-group-item">
                    <h6>Registrar Ventas</h6>
                </li>
                <li class="list-group-item">
                    <h6>Consultar Ventas</h6>
                </li>
                <li class="list-group-item">
                    <h6>Editar ventas</h6>
                </li>
            </ul>
            <button class="btn btn-lg btn-primary rounded mt-5" style="width:100% ;">Ventas</button>
        </article>
        <article class="col-lg-3 col-sm-5 bg-light p-4 m-2 mt-5 me-4 rounded text-center shadow">
            <img src="../assets/imagenes/compra-img-link.png" alt="" class="mb-5" style="width:100px">
            <ul class="list-group">
                <li class="list-group-item">
                    <h6>Registrar compras</h6>
                </li>
                <li class="list-group-item">
                    <h6>Consultar compras</h6>
                </li>
                <li class="list-group-item">
                    <h6>Editar registros</h6>
                </li>
                <li class="list-group-item">
                    <h6>Ingresar Productos</h6>
                </li>
            </ul>
            <button class="btn btn-lg btn-primary rounded mt-4" style="width:100% ;">Compras</button>
        </article>
        <article class="col-lg-3 col-sm-5 bg-light p-4 m-2 mt-5 me-4 rounded text-center shadow">
            <img src="../assets/imagenes/producto-img-link.png" alt="" class="mb-5" style="width:100px">
            <ul class="list-group">
                <li class="list-group-item">
                    <h6>Consultar información de productos</h6>
                </li>
                <li class="list-group-item">
                    <h6>Modificar información de productos</h6>
                </li>
                <li class="list-group-item">
                    <h6>Visualizar stock de productos</h6>
                </li>
            </ul>
            <button class="btn btn-lg btn-primary rounded mt-4" style="width:100% ;">Productos</button>
        </article>
        <article class="col-lg-3 col-sm-5 bg-light p-4 m-2 mt-5 me-4 rounded text-center shadow">
            <img src="../assets/imagenes/clientes-img-link.png" alt="" class="mb-5" style="width:100px">
            <ul class="list-group">
                <li class="list-group-item">
                    <h6>Visualize clientes y proveedores</h6>
                </li>
                <li class="list-group-item">
                    <h6>Modificar información de clientes y prov</h6>
                </li>
                <li class="list-group-item">
                    <h6>Añada informacion relevante</h6>
                </li>
            </ul>
            <button class="btn btn-lg btn-primary rounded mt-4" style="width:100% ;">Clientes y Prov</button>
        </article>
        <article class="col-lg-3 col-sm-5 bg-light p-4 m-2 mt-5 me-4 rounded text-center shadow">
            <img src="../assets/imagenes/orden-img-link.png" alt="" class="mb-5" style="width:100px">
            <ul class="list-group">
                <li class="list-group-item">
                    <h6>Cree orden de compra</h6>
                </li>
                <li class="list-group-item">
                    <h6>Programe ordenes de compra automaticas</h6>
                </li>
                <li class="list-group-item">
                    <h6>Exporte y comparta ordenes</h6>
                </li>
            </ul>
            <button class="btn btn-lg btn-primary rounded mt-4" style="width:100% ;">Orden de Compra</button>
        </article>
    </section>
    
    <script src="../../CONTROLLER/script/home.js"></script>
</body>
</html>