<?php 

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarClientes' : function mostrarClientes(){
            
            include ('config.php');

            $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameCliente = $row['cli_nombre'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3 cli-card'>
                            <div class='card-body d-flex ps-2'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4 nameCliente'>$nameCliente</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarClientes();
        break;
        case 'autSearchCli' : function autSearchCli(){

            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT cli_id, cli_nombre FROM cliente WHERE cli_id='$q' OR cli_nombre LIKE '".$q."%'";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameCliente = $row['cli_nombre'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3 cli-card'>
                            <div class='card-body d-flex ps-2'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4 nameCliente'>$nameCliente</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }
        autSearchCli();
        break;
        case 'autSearchCliEmpty' : function autSearchCliEmpty(){
            include ('config.php');

            $q= mysqli_real_escape_string($conex, $_POST['q']);

            $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre ASC";
            
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nameCliente = $row['cli_nombre'];
                    echo "
                        <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3 cli-card'>
                            <div class='card-body d-flex ps-2'>
                                <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                <h4 class='align-self-center ms-4 nameCliente'>$nameCliente</h4>
                            </div>
                        </div>";
    
                }
            }else{
                echo "Resultados no encontrados";
            }
        }autSearchCliEmpty();
        break;
        case 'mostrarRegistrosAZ' : function mostrarRegistrosAZ(){
            include ('config.php');

                $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre ASC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    while($row = $resultado->fetch_array()){
                        $nameCliente = $row['cli_nombre'];
                        echo "
                            <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3 cli-card'>
                                <div class='card-body d-flex ps-2'>
                                    <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                    <h4 class='align-self-center ms-4 nameCliente'>$nameCliente</h4>
                                </div>
                            </div>";
        
                    }
                }else{
                    echo "Resultados no encontrados";
                }
        }
        mostrarRegistrosAZ();break;
        case 'mostrarRegistrosZA' : function mostrarRegistrosZA(){
            include ('config.php');

                $consulta = "SELECT cli_nombre FROM cliente ORDER BY cli_nombre DESC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    while($row = $resultado->fetch_array()){
                        $nameCliente = $row['cli_nombre'];
                        echo "
                            <div class='col-lg-7 col-sm-5 card shadow text-center me-4 mb-3 cli-card'>
                                <div class='card-body d-flex ps-2'>
                                    <img src='../assets/imagenes/user-icon.png' style='width:60px'>
                                    <h4 class='align-self-center ms-4 nameCliente'>$nameCliente</h4>
                                </div>
                            </div>";
        
                    }
                }else{
                    echo "Resultados no encontrados";
                }
        }
        mostrarRegistrosZA();break;
        case 'mostrarInfoCliente': function mostrarInfoCliente(){

            include('config.php');

            $cliente = $_POST['q'];

            $consulta = "SELECT cli_id, cli_nombre, cli_telefono, cli_direccion, cli_email FROM cliente
            WHERE cli_nombre = '$cliente'";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nombreCliente = $row['cli_nombre'];
                    $dirCliente = $row['cli_direccion'];
                    $telCliente = $row['cli_telefono'];
                    $emailCliente = $row['cli_email'];
                    $idCliente = $row['cli_id'];
                    
                    echo "

                    <div class='card-body text-center'>
                        <div class='mb-3'>
                            <div class='d-flex justify-content-between'>
                                <button class='btn btn-sm btn-outline-none d-block mb-0'><img src='../../VIEWS/assets/imagenes/editar.png' style='width:20px;'></button>
                                <button class='btn btn-sm btn-outline-none d-block mb-0'><img src='../../VIEWS/assets/imagenes/basura.png' style='width:20px;'></button>
                            </div>
                        </div>
                        
                        <div class='mb-5'>
                            <img src='../../VIEWS/assets/imagenes/user-icon.png' alt='' class='rounded rounded-circle img-thumbnail' style='width:160px;'>
                        </div>
    
                        <h6 class='text-secondary mb-4'>ID: <span class='p-2 bg-light border rounded text-dark ms-3'>$idCliente</span></h6>
                        <h6 class='text-secondary mb-4'>Direccion: <span class='p-2 bg-light border rounded text-dark ms-3'>$dirCliente</span></h6>
                        <h6 class='text-secondary mb-4'>Telefono: <span class='p-2 bg-light border rounded text-dark ms-3'>$telCliente</span></h6>
                        <h6 class='text-secondary mb-4'>Email: <span class='p-2 bg-light border rounded text-dark ms-3'>$emailCliente</span></h6>
                    </div>
                    <div class='card footer bg-light text-center p-2'>
                        <h3 class='text-success'>$nombreCliente</h3>
                    </div>
                    ";
    
                }
            }else{
                echo "Resultados no encontrados";
            }

        }mostrarInfoCliente();
        break;
    }
}