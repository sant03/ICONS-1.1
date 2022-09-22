<?php 

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarPedidos' : function mostrarPedidos(){
            
            include ('config.php');

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre FROM pedidoxcliente as p
            INNER JOIN cliente AS c 
            ON p.ped_cli_id = c.cli_id ORDER BY p.ped_id ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidos();
        break;
        case 'autSearchProv' : function autSearchProv(){

            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT prov_id, prov_nom FROM proveedor WHERE prov_id='$q' OR prov_nom LIKE '".$q."%'";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameProveedor = $row['prov_nom'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3 prov-card'>
                            <div class='card-body d-flex ps-2'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4 nameProveedor'>$nameProveedor</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        autSearchProv();
        break;
        case 'autSearchProvEmpty' : function autSearchProvEmpty(){
            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT prov_nom FROM proveedor ORDER BY prov_nom ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameProveedor = $row['prov_nom'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3 prov-card'>
                            <div class='card-body d-flex ps-2'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4 nameProveedor'>$nameProveedor</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }autSearchProvEmpty();
        break;
        case 'mostrarPedidosAZ' : function mostrarPedidosAZ(){
            include ('config.php');

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre FROM pedidoxcliente as p
            INNER JOIN cliente AS c 
            ON p.ped_cli_id = c.cli_id ORDER BY c.cli_nombre ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidosAZ();break;
        case 'mostrarPedidosMRP' : function mostrarPedidosMRP(){
            include ('config.php');

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre FROM pedidoxcliente as p
            INNER JOIN cliente AS c 
            ON p.ped_cli_id = c.cli_id ORDER BY p.ped_fecha DESC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidosMRP();break;
        case 'mostrarPedidosMAP' : function mostrarPedidosMAP(){
            include ('config.php');

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre FROM pedidoxcliente as p
            INNER JOIN cliente AS c 
            ON p.ped_cli_id = c.cli_id ORDER BY p.ped_fecha ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidosMAP();break;
        case 'mostrarPedidosZA' : function mostrarPedidosZA(){
            include ('config.php');

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre FROM pedidoxcliente as p
            INNER JOIN cliente AS c 
            ON p.ped_cli_id = c.cli_id ORDER BY c.cli_nombre DESC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidosZA();break;
        case 'mostrarPedidosMm' : function mostrarPedidosMm(){
            include ('config.php');

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre, p.ped_total FROM pedidoxcliente as p
            INNER JOIN cliente AS c 
            ON p.ped_cli_id = c.cli_id 
            ORDER BY ped_total DESC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidosMm();break;
        case 'mostrarPedidosmM' : function mostrarPedidosmM(){
            include ('config.php');

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre, p.ped_total FROM pedidoxcliente as p
            INNER JOIN cliente AS c 
            ON p.ped_cli_id = c.cli_id 
            ORDER BY p.ped_total ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidosmM();break;
        case 'mostrarPedidosFilterBy' : function mostrarPedidosFilterBy(){
            include ('config.php');

            $data = json_decode($_POST['q']);
            var_dump($data);

            $pedDate = $data[0];
            $product = $data[1];
            $cliente = $data[2];
            $pedCode = $data[3];
            

            $consulta = "SELECT p.ped_id, p.ped_fecha, c.cli_nombre, p.ped_total FROM pedidoxcliente as p
                INNER JOIN cliente AS c 
                ON p.ped_cli_id = c.cli_id
                
                WHERE c.cli_nombre='$cliente'";
        
            $resultado = mysqli_query($conex,$consulta);
                

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $idPed = $row['ped_id'];
                    $fechaPed = $row['ped_fecha'];
                    $clientePed = $row['cli_nombre'];
                    echo "
                    <div class='col-lg-2 col-sm-5 card shadow text-center p-1 me-4 mb-3 rounded'>
                        <div class='card-body'>
                            <h6>Pedido: <span class='text-info'>$idPed</span></h6>
                            <img src='../../VIEWS/assets/imagenes/box.png' alt='' class='mb-2' style='width:60px'>
                            <h6>Fecha: <span>$fechaPed</span> </h6>
                            <h6>Cliente: <span class='text-info'>$clientePed</span></h6>
                        </div>
                    </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarPedidosFilterBy();
        break;
    }
}