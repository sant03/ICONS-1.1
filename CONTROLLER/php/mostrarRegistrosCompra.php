<?php 

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarRegistros' : function mostrarRegistros(){
            
                include ('config.php');

                $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
                FROM compras as c 
                INNER JOIN productos as p 
                ON c.com_pro_id = p.pro_id 
                INNER JOIN ordenxproveedor as o 
                ON c.com_numero_orden = o.ord_numero_orden 
                INNER JOIN proveedor as pr 
                ON pr.prov_id = o.ord_prov_id";

                $resultado = mysqli_query($conex,$consulta);


                if($resultado){
                    echo "
                <thead>
                    <tr>
                        <th>FECHA</th>
                        <th>PROVEEDOR</th>
                        <th>CODIGO DE PRODUCTO</th>
                        <th>PRODUCTO</th>
                        <th>CANTIDAD</th>
                        <th>TOTAL</th>
                        <th>No Compra</th>
                        <th></th>
                    </tr>
                </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['com_fecha'];
                        $prov = $row['prov_nom'];
                        $codigoPro = $row['com_pro_id'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['com_cant_pro'];
                        $total = $row['com_total'];
                        $orden = $row['ord_numero_orden'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$prov</td>
                            <td>$codigoPro</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$orden</td>
                            <td>
                            <button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/editar.png' alt='' style='width:20px ;'></button>
                            <button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button>
                            </td>

                        </tr>";
                    }
                    
                }else{
                    echo "Resultados no encontrados";
                }

        }
        mostrarRegistros();break;
        case 'mostrarRegistrosMRP' : function mostrarRegistrosMRP(){
            include ('config.php');

            $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
            FROM compras as c 
            INNER JOIN productos as p 
            ON c.com_pro_id = p.pro_id 
            INNER JOIN ordenxproveedor as o 
            ON c.com_numero_orden = o.ord_numero_orden 
            INNER JOIN proveedor as pr 
            ON pr.prov_id = o.ord_prov_id
            ORDER BY c.com_fecha DESC";

            $resultado = mysqli_query($conex,$consulta);


            if($resultado){
                echo "
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>CODIGO DE PRODUCTO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>No Compra</th>
                    <th></th>
                </tr>
            </thead>";
                while($row = $resultado->fetch_array()){
                    $fecha = $row['com_fecha'];
                    $prov = $row['prov_nom'];
                    $codigoPro = $row['com_pro_id'];
                    $producto = $row['pro_referencia'];
                    $cantidad = $row['com_cant_pro'];
                    $total = $row['com_total'];
                    $orden = $row['ord_numero_orden'];
                    echo "
                    <tr>
                        <td>$fecha</td>
                        <td>$prov</td>
                        <td>$codigoPro</td>
                        <td>$producto</td>
                        <td>$cantidad</td>
                        <td>$ $total</td>
                        <td>$orden</td>
                        <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                    </tr>";
                }
                
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarRegistrosMRP();break;
        case 'mostrarRegistrosMAP' : function mostrarRegistrosMAP(){
            include ('config.php');

            include ('config.php');

            $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
            FROM compras as c 
            INNER JOIN productos as p 
            ON c.com_pro_id = p.pro_id 
            INNER JOIN ordenxproveedor as o 
            ON c.com_numero_orden = o.ord_numero_orden 
            INNER JOIN proveedor as pr 
            ON pr.prov_id = o.ord_prov_id
            ORDER BY c.com_fecha ASC";

            $resultado = mysqli_query($conex,$consulta);


            if($resultado){
                echo "
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>CODIGO DE PRODUCTO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>No Compra</th>
                    <th></th>
                </tr>
            </thead>";
                while($row = $resultado->fetch_array()){
                    $fecha = $row['com_fecha'];
                    $prov = $row['prov_nom'];
                    $codigoPro = $row['com_pro_id'];
                    $producto = $row['pro_referencia'];
                    $cantidad = $row['com_cant_pro'];
                    $total = $row['com_total'];
                    $orden = $row['ord_numero_orden'];
                    echo "
                    <tr>
                        <td>$fecha</td>
                        <td>$prov</td>
                        <td>$codigoPro</td>
                        <td>$producto</td>
                        <td>$cantidad</td>
                        <td>$ $total</td>
                        <td>$orden</td>
                        <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                    </tr>";
                }
                
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarRegistrosMAP();break;
        case 'mostrarRegistrosAZ' : function mostrarRegistrosAZ(){
            include ('config.php');

            $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
            FROM compras as c 
            INNER JOIN productos as p 
            ON c.com_pro_id = p.pro_id 
            INNER JOIN ordenxproveedor as o 
            ON c.com_numero_orden = o.ord_numero_orden 
            INNER JOIN proveedor as pr 
            ON pr.prov_id = o.ord_prov_id
            ORDER BY pr.prov_nom ASC";

            $resultado = mysqli_query($conex,$consulta);


            if($resultado){
                echo "
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>CODIGO DE PRODUCTO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>No Compra</th>
                    <th></th>
                </tr>
            </thead>";
                while($row = $resultado->fetch_array()){
                    $fecha = $row['com_fecha'];
                    $prov = $row['prov_nom'];
                    $codigoPro = $row['com_pro_id'];
                    $producto = $row['pro_referencia'];
                    $cantidad = $row['com_cant_pro'];
                    $total = $row['com_total'];
                    $orden = $row['ord_numero_orden'];
                    echo "
                    <tr>
                        <td>$fecha</td>
                        <td>$prov</td>
                        <td>$codigoPro</td>
                        <td>$producto</td>
                        <td>$cantidad</td>
                        <td>$ $total</td>
                        <td>$orden</td>
                        <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                    </tr>";
                }
                
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarRegistrosAZ();break;
        case 'mostrarRegistrosZA' : function mostrarRegistrosZA(){
            include ('config.php');

            $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
            FROM compras as c 
            INNER JOIN productos as p 
            ON c.com_pro_id = p.pro_id 
            INNER JOIN ordenxproveedor as o 
            ON c.com_numero_orden = o.ord_numero_orden 
            INNER JOIN proveedor as pr 
            ON pr.prov_id = o.ord_prov_id
            ORDER BY pr.prov_nom DESC";

            $resultado = mysqli_query($conex,$consulta);


            if($resultado){
                echo "
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>CODIGO DE PRODUCTO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>No Compra</th>
                    <th></th>
                </tr>
            </thead>";
                while($row = $resultado->fetch_array()){
                    $fecha = $row['com_fecha'];
                    $prov = $row['prov_nom'];
                    $codigoPro = $row['com_pro_id'];
                    $producto = $row['pro_referencia'];
                    $cantidad = $row['com_cant_pro'];
                    $total = $row['com_total'];
                    $orden = $row['ord_numero_orden'];
                    echo "
                    <tr>
                        <td>$fecha</td>
                        <td>$prov</td>
                        <td>$codigoPro</td>
                        <td>$producto</td>
                        <td>$cantidad</td>
                        <td>$ $total</td>
                        <td>$orden</td>
                        <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                    </tr>";
                }
                
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarRegistrosZA();break;
        case 'mostrarRegistrosMm' : function mostrarRegistrosMm(){
            include ('config.php');

            $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
            FROM compras as c 
            INNER JOIN productos as p 
            ON c.com_pro_id = p.pro_id 
            INNER JOIN ordenxproveedor as o 
            ON c.com_numero_orden = o.ord_numero_orden 
            INNER JOIN proveedor as pr 
            ON pr.prov_id = o.ord_prov_id
            ORDER BY c.com_total DESC";

            $resultado = mysqli_query($conex,$consulta);


            if($resultado){
                echo "
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>CODIGO DE PRODUCTO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>No Compra</th>
                    <th></th>
                </tr>
            </thead>";
                while($row = $resultado->fetch_array()){
                    $fecha = $row['com_fecha'];
                    $prov = $row['prov_nom'];
                    $codigoPro = $row['com_pro_id'];
                    $producto = $row['pro_referencia'];
                    $cantidad = $row['com_cant_pro'];
                    $total = $row['com_total'];
                    $orden = $row['ord_numero_orden'];
                    echo "
                    <tr>
                        <td>$fecha</td>
                        <td>$prov</td>
                        <td>$codigoPro</td>
                        <td>$producto</td>
                        <td>$cantidad</td>
                        <td>$ $total</td>
                        <td>$orden</td>
                        <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                    </tr>";
                }
                
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarRegistrosMm();break;
        case 'mostrarRegistrosmM' : function mostrarRegistrosmM(){
            include ('config.php');

            $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
            FROM compras as c 
            INNER JOIN productos as p 
            ON c.com_pro_id = p.pro_id 
            INNER JOIN ordenxproveedor as o 
            ON c.com_numero_orden = o.ord_numero_orden 
            INNER JOIN proveedor as pr 
            ON pr.prov_id = o.ord_prov_id
            ORDER BY c.com_total ASC";

            $resultado = mysqli_query($conex,$consulta);


            if($resultado){
                echo "
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>CODIGO DE PRODUCTO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>No Compra</th>
                    <th></th>
                </tr>
            </thead>";
                while($row = $resultado->fetch_array()){
                    $fecha = $row['com_fecha'];
                    $prov = $row['prov_nom'];
                    $codigoPro = $row['com_pro_id'];
                    $producto = $row['pro_referencia'];
                    $cantidad = $row['com_cant_pro'];
                    $total = $row['com_total'];
                    $orden = $row['ord_numero_orden'];
                    echo "
                    <tr>
                        <td>$fecha</td>
                        <td>$prov</td>
                        <td>$codigoPro</td>
                        <td>$producto</td>
                        <td>$cantidad</td>
                        <td>$ $total</td>
                        <td>$orden</td>
                        <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                    </tr>";
                }
                
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarRegistrosmM();break;
        case 'mostrarRegistrosFilterBy' : function mostrarRegistrosFilterBy(){
            include ('config.php');

            $data = json_decode($_POST['q']);
            var_dump($data);

            $purchaseDate = $data[0];
            $product = $data[1];
            $proveedor = $data[2];
            $purchaseCode = $data[3];
            
            

            $consulta = "SELECT c.com_fecha, pr.prov_nom, c.com_pro_id, p.pro_referencia, c.com_cant_pro, c.com_total, o.ord_numero_orden 
                FROM compras as c 
                INNER JOIN productos as p 
                ON c.com_pro_id = p.pro_id 
                INNER JOIN ordenxproveedor as o 
                ON c.com_numero_orden = o.ord_numero_orden 
                INNER JOIN proveedor as pr 
                ON pr.prov_id = o.ord_prov_id WHERE c.com_fecha ='$purchaseDate' OR  o.ord_numero_orden='$purchaseCode' OR pr.prov_nom='$proveedor' OR c.com_pro_id='$product'";
        
            $resultado = mysqli_query($conex,$consulta);
                

            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                echo "
            <thead>
                <tr>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>CODIGO DE PRODUCTO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                    <th>No Compra</th>
                    <th></th>
                </tr>
            </thead>";
                while($row = $resultado->fetch_array()){
                    $fecha = $row['com_fecha'];
                    $prov = $row['prov_nom'];
                    $codigoPro = $row['com_pro_id'];
                    $producto = $row['pro_referencia'];
                    $cantidad = $row['com_cant_pro'];
                    $total = $row['com_total'];
                    $orden = $row['ord_numero_orden'];
                    echo "
                    <tr>
                        <td>$fecha</td>
                        <td>$prov</td>
                        <td>$codigoPro</td>
                        <td>$producto</td>
                        <td>$cantidad</td>
                        <td>$ $total</td>
                        <td>$orden</td>
                        <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                    </tr>";
                }
                
            }else{
                echo "Resultados no encontrados";
            }
        }
        mostrarRegistrosFilterBy();break;
        
        // ...etc...
    }
}