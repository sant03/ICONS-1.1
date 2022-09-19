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
            <h1><a href="clientes.html" class="text-decoration-none text-success">Clientes</a> | Proveedores</h1>
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
                <input type="text" class="form-control me-2" placeholder="Buscar proveedores">
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
                            <input type="text" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Direccion </label>
                            <input type="number" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Telefono </label>
                            <input type="number" class="form-control mb-2">
                            <label for="" class="form-label fw-bold">Email </label>
                            <input type="number" class="form-control mb-2">
                          </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Añadir proveedor</button>
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
        
        <!--Cliente cards-->
        <div class="row mt-3">
            <div class="col-9 overflow-auto" style="height:550px ;">
                <div class="row">
                    <div class="col-11">
                        <h3>Todos</h3>
                        <div class="row">
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
                <div class="card shadow mb-3">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <button class="btn btn-outline-none" data-bs-toggle="modal" data-bs-target="#editarCliModal"><img src="../assets/imagenes/editar.png" alt="" style="width: 30px;"></i></button>
                            <div class="modal fade text-start" id="editarCliModal">
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
                            <button class="btn btn-oultine-none"><img src="../assets/imagenes/basura.png" alt="" style="width:30px;"></button>
                        </div>
                        
                        <div class="mb-5">
                            <img src="../assets/imagenes/user-icon.png" alt="" class="rounded rounded-circle img-thumbnail" style="width:160px;">
                        </div>
    
                        <h6 class="text-secondary mb-4">ID: <span class="p-2 bg-light border rounded text-dark ms-3">1234578654</span></h6>
                        <h6 class="text-secondary mb-4">Direccion: <span class="p-2 bg-light border rounded text-dark ms-3">Calle 83#25a 183</span></h6>
                        <h6 class="text-secondary mb-4">Telefono: <span class="p-2 bg-light border rounded text-dark ms-3">3042617834</span></h6>
                        <h6 class="text-secondary mb-4">Email: <span class="p-2 bg-light border rounded text-dark ms-3">nombre@gmail.com</span></h6>
                    </div>
                    <div class="card footer bg-light text-center p-2">
                        <h3 class="text-success">Nombre</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>