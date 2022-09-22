<?php 

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarProveedores' : function mostrarProveedores(){
            
            include ('config.php');

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
        }
        mostrarProveedores();
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
        case 'mostrarRegistrosAZ' : function mostrarRegistrosAZ(){
            include ('config.php');

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
        }
        mostrarRegistrosAZ();break;
        case 'mostrarRegistrosZA' : function mostrarRegistrosZA(){
            include ('config.php');

                $consulta = "SELECT prov_nom FROM proveedor ORDER BY prov_nom DESC";
                

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
        mostrarRegistrosZA();break;
        case 'mostrarInfoProveedor': function mostrarInfoProveedor(){

            include('config.php');

            $proveedor = $_POST['q'];

            $consulta = "SELECT prov_id, prov_nom, prov_tel, prov_dir, prov_email FROM proveedor
            WHERE prov_nom = '$proveedor'";

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                while($row = $resultado->fetch_array()){
                    $nombreProveedor = $row['prov_nom'];
                    $dirProveedor = $row['prov_dir'];
                    $telProveedor = $row['prov_tel'];
                    $emailProveedor = $row['prov_email'];
                    $idProveedor = $row['prov_id'];
                    
                    echo "

                    <div class='card-body text-center'>
                        <div class='mb-3'>
                            <div class='d-flex justify-content-between'>
                                <button class='btn btn-sm btn-outline-none d-block mb-0'><img src='../../VIEWS/assets/imagenes/editar.png' style='width:20px;' data-bs-toggle='modal' data-bs-target='#editarProvModal'></button>
                                <button class='btn btn-sm btn-outline-none d-block mb-0'><img src='../../VIEWS/assets/imagenes/basura.png' style='width:20px;'></button>
                            </div>
                        </div>
                        
                        <div class='mb-5'>
                            <img src='../../VIEWS/assets/imagenes/user-icon.png' alt='' class='rounded rounded-circle img-thumbnail' style='width:160px;'>
                        </div>
    
                        <h6 class='text-secondary mb-4'>ID: <span class='p-2 bg-light border rounded text-dark ms-3'>$idProveedor</span></h6>
                        <h6 class='text-secondary mb-4'>Direccion: <span class='p-2 bg-light border rounded text-dark ms-3'>$dirProveedor</span></h6>
                        <h6 class='text-secondary mb-4'>Telefono: <span class='p-2 bg-light border rounded text-dark ms-3'>$telProveedor</span></h6>
                        <h6 class='text-secondary mb-4'>Email: <span class='p-2 bg-light border rounded text-dark ms-3'>$emailProveedor</span></h6>
                    </div>
                    <div class='card footer bg-light text-center p-2'>
                        <h3 class='text-success'>$nombreProveedor</h3>
                    </div>
                    ";
    
                }
            }else{
                echo "Resultados no encontrados";
            }

        }mostrarInfoProveedor();
        break;
    }
}