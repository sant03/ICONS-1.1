<?php 

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarProductos' : function mostrarProductos(){
            
                include ('config.php');

                $consulta = "SELECT c.nom_categoria, p.pro_referencia FROM productos as p INNER JOIN categorias as c
                ON p.pro_categoria = c.id_categoria";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    while($row = $resultado->fetch_array()){
                        $categoria = $row['nom_categoria'];
                        $productos = $row['pro_referencia'];
                        echo "
                            <div class='col-lg-2 col-sm-5 card shadow text-center p-3 pb-0 pt-1 me-4 mb-3 pro-card'>
                                <div class='card-body mb-0 pb-0'>
                                    <img src='../assets/imagenes/producto-img-link.png' alt='' style='width:80px'>
                                    <h6 class='mt-2 nameProduct'>$productos</h6>
                                </div>
                                <div class='card-footer bg-dark rounded mb-2'>
                                    <h6 class='text-white'>$categoria</h6>
                                </div>
                            </div>";
        
                    }
                }else{
                    echo "Resultados no encontrados";
                }

        }
        mostrarProductos();
        break;
        case 'autSearchPro' : function autSearchPro(){

            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT c.nom_categoria, p.pro_referencia, p.pro_id FROM productos as p INNER JOIN categorias as c
            ON p.pro_categoria = c.id_categoria WHERE c.nom_categoria = '$q' OR p.pro_id = '$q' OR p.pro_referencia LIKE '".$q."%'";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $categoria = $row['nom_categoria'];
                    $productos = $row['pro_referencia'];
                    echo "
                        <div class='col-lg-2 col-sm-5 card shadow text-center p-3 pb-0 pt-1 me-4 mb-3 pro-card'>
                            <div class='card-body mb-0 pb-0'>
                                <img src='../assets/imagenes/producto-img-link.png' alt='' style='width:80px'>
                                <h6 class='mt-2 nameProduct'>$productos</h6>
                            </div>
                            <div class='card-footer bg-dark rounded mb-2'>
                                <h6 class='text-white'>$categoria</h6>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        autSearchPro();
        break;
        case 'autSearchProEmpty' : function autSearchProEmpty(){
            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT c.nom_categoria, p.pro_referencia, p.pro_id FROM productos as p INNER JOIN categorias as c
            ON p.pro_categoria = c.id_categoria";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $categoria = $row['nom_categoria'];
                    $productos = $row['pro_referencia'];
                    echo "
                        <div class='col-lg-2 col-sm-5 card shadow text-center p-3 pb-0 pt-1 me-4 mb-3 pro-card'>
                            <div class='card-body mb-0 pb-0'>
                                <img src='../assets/imagenes/producto-img-link.png' alt='' style='width:80px'>
                                <h6 class='mt-2 nameProduct'>$productos</h6>
                            </div>
                            <div class='card-footer bg-dark rounded mb-2'>
                                <h6 class='text-white'>$categoria</h6>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }autSearchProEmpty();
        break;
        case 'mostrarProductosFilterBy' : function mostrarProductosFilterBy(){
            include ('config.php');

            $stockPro = $_POST['q'];

            $consulta = "SELECT c.nom_categoria, p.pro_estado, p.pro_referencia, p.pro_id FROM productos as p INNER JOIN categorias as c
            ON p.pro_categoria = c.id_categoria WHERE p.pro_estado = '$stockPro'";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $categoria = $row['nom_categoria'];
                    $productos = $row['pro_referencia'];
                    echo "
                        <div class='col-lg-2 col-sm-5 card shadow text-center p-3 pb-0 pt-1 me-4 mb-3 pro-card'>
                            <div class='card-body mb-0 pb-0'>
                                <img src='../assets/imagenes/producto-img-link.png' alt='' style='width:80px'>
                                <h6 class='mt-2 nameProduct'>$productos</h6>
                            </div>
                            <div class='card-footer bg-dark rounded mb-2'>
                                <h6 class='text-white'>$categoria</h6>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }

        }mostrarProductosFilterBy();
        break;
        case 'mostrarProductosFilterBy2' : function mostrarProductosFilterBy2(){
            include ('config.php');

            $data = $_POST['q'];

            $consulta = "SELECT c.nom_categoria, p.pro_estado, p.pro_referencia, p.pro_id, p.pro_cantidad FROM productos as p INNER JOIN categorias as c
            ON p.pro_categoria = c.id_categoria WHERE c.nom_categoria = '$data'";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $cantidad = $row['pro_cantidad'];
                    $producto = $row['pro_referencia'];
                    echo "
                    <div class='col-1'>
                        <div class='card text-center mb-3 product-card'>
                            <div class='card-body'>
                                <p class='fw-bold mb-0 referencia'>$producto</p>
                                <img src='../../VIEWS/assets/imagenes/producto-img-link.png' alt='' class='mb-2' style='width:35px'>
                                <span class='d-block'>Quedan <span class='text-info fw-bold cantidad'>$cantidad </span></span>
                            </div>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }

        }mostrarProductosFilterBy2();
        break;
        case 'mostrarInfoProducto' : function mostrarInfoProducto(){
            include('config.php');

            $product = $_POST['q'];

            $consulta = "SELECT p.pro_cantidad, p.pro_referencia, p.pro_precio_venta, p.pro_precio_compra, p.pro_min_compra, p.pro_descripcion, c.nom_categoria, p.pro_estado, p.pro_id FROM productos as p INNER JOIN categorias as c
            ON p.pro_categoria = c.id_categoria WHERE p.pro_referencia = '$product'";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $referencia = $row['pro_referencia'];
                    $cantidad = $row['pro_cantidad'];
                    $precioVen = $row['pro_precio_venta'];
                    $precioCom = $row['pro_precio_compra'];
                    $minCompra = $row['pro_min_compra'];
                    $categoria = $row['nom_categoria'];
                    $codigoPro = $row['pro_id'];
                    $descripcion = $row['pro_descripcion'];
                    $estado = $row['pro_estado'];
                    echo "

                    <div class='card-body text-center'>
                        <div class='d-flex justify-content-between'>
                            <button class='btn btn-sm btn-outline-none d-block mb-0'><img src='../../VIEWS/assets/imagenes/editar.png' style='width:20px;'></button>
                            <button class='btn btn-sm btn-outline-none d-block mb-0'><img src='../../VIEWS/assets/imagenes/basura.png' style='width:20px;'></button>
                        </div>
                        
                        <img src='../assets/imagenes/product-image.jpg' class='mt-0 pt-0' alt='' style='width:200px;'>
                        <div class='overflow-auto pt-4' style='height:315px;'>
                            <h6 class='text-secondary mb-4'>Referencia: <span class='p-2 bg-light border rounded text-dark ms-3'>$referencia</span></h6>
                            <h6 class='text-secondary mb-4'>Stock: <span class='p-2 bg-light border rounded text-dark ms-3'>$cantidad</span></h6>
                            <h6 class='text-secondary mb-4'>Precio Venta: <span class='p-2 bg-light border rounded text-dark ms-3'>$ $precioVen</span></h6>
                            <h6 class='text-secondary mb-4'>Precio Compra: <span class='p-2 bg-light border rounded text-dark ms-3'>$ $precioCom</span></h6>
                            <h6 class='text-secondary mb-4'>Minimo de compra: <span class='p-2 bg-light border rounded text-dark ms-3'>$minCompra</span></h6>
                            <h6 class='text-secondary mb-4'>Categoria: <span class='p-2 bg-light border rounded text-dark ms-3'>$categoria</span></h6>
                            <h6 class='text-secondary mb-4'>Codigo: <span class='p-2 bg-light border rounded text-dark ms-3'>$codigoPro</span></h6>
                            <div>
                                <h6 class='text-secondary mb-4'>Descripcion:</h6>
                                <h6 class='p-2 bg-light border rounded text-dark ms-3'>$descripcion</h6>
                            </div>
                        </div>
                    </div>
                    <div class='card footer bg-light text-center p-2'>
                        <h3 class='text-success' class='stateProduct'>$estado</h3>
                    </div>
                    ";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }mostrarInfoProducto();
        break;
        case 'consultarMinCompra' : function consultarMinCompra(){
            include('config.php');

            $product = $_POST['q'];

            $consulta = "SELECT pro_min_compra FROM productos WHERE pro_referencia = '$product'";

            $resultado = mysqli_query($conex,$consulta);
            $rowMinCom = mysqli_fetch_array($resultado);
    
        if(mysqli_num_rows($resultado) > 0){
            $minCompra = $rowMinCom['pro_min_compra'];
            echo $minCompra;
        }else{
            echo "Resultados no encontrados";
        }
        }consultarMinCompra();
        break;
        case 'consultarPrecioCom' : function consultarPrecioCom(){
            include('config.php');

            $product = $_POST['q'];

            $consulta = "SELECT pro_precio_compra FROM productos WHERE pro_referencia = '$product'";

            $resultado = mysqli_query($conex,$consulta);
            $rowPrecioCom = mysqli_fetch_array($resultado);
    
        if(mysqli_num_rows($resultado) > 0){
            $precioCom = $rowPrecioCom['pro_precio_compra'];
            echo $precioCom;
        }else{
            echo "Resultados no encontrados";
        }
        }consultarPrecioCom();
        break;
    }
}