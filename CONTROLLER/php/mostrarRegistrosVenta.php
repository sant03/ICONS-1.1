<?php 

if(isset($_POST['function']) && !empty($_POST['function'])) {
    $function = $_POST['function'];
    
    switch($function) {
        case 'mostrarRegistros' : function mostrarRegistros(){
            
                include ('config.php');

                $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td class='idVen'>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
                            <td><button class='btn btn-outline-none' data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                        </tr>";
                    }
                }else{
                    echo "Resultados no encontrados";
                }

        }
        mostrarRegistros();break;
        case 'mostrarRegistrosMRP' : function mostrarRegistrosMRP(){
            include ('config.php');

                $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id
                ORDER BY v.ven_fecha DESC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
                            <td><button class='btn btn-outline-none'data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                        </tr>";
                    }
                }else{
                    echo "Resultados no encontrados";
                }
        }
        mostrarRegistrosMRP();break;
        case 'mostrarRegistrosMAP' : function mostrarRegistrosMAP(){
            include ('config.php');

                $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id
                ORDER BY v.ven_fecha ASC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
                            <td><button class='btn btn-outline-none'data-bs-toggle='modal' data-bs-target='#deleteRecordModal'><img src='../../VIEWS/assets/imagenes/basura.png' alt='' style='width:20px ;'></button></td>
                        </tr>";
                    }
                }else{
                    echo "Resultados no encontrados";
                }
        }
        mostrarRegistrosMAP();break;
        case 'mostrarRegistrosAZ' : function mostrarRegistrosAZ(){
            include ('config.php');

                $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id
                ORDER BY c.cli_nombre ASC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
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

                $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id
                ORDER BY c.cli_nombre DESC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
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

                $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id
                ORDER BY v.ven_total DESC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
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

                $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id
                ORDER BY v.ven_total ASC";
                

                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
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

            $saleDate = $data[0];
            $product = $data[1];
            $cliente = $data[2];
            $statePay = $data[3];
            $saleCode = $data[4];
            

            $consulta = "SELECT v.ven_fecha, v.ven_id, c.cli_nombre, p.pro_referencia, v.ven_cant_pro, v.ven_total, v.ven_estado_pago
                FROM venta as v
                INNER JOIN cliente as c
                ON v.ven_cli_id = c.cli_id
                INNER JOIN productos as p
                ON v.ven_pro_id = p.pro_id 
                WHERE v.ven_fecha ='$saleDate' OR  v.ven_id='$saleCode' OR c.cli_nombre='$cliente' OR p.pro_referencia='$product' OR 
                v.ven_estado_pago='$statePay'";
        
            $resultado = mysqli_query($conex,$consulta);
                

            $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    echo "
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>CODIGO VENTA</th>
                            <th>CLIENTE</th>
                            <th>PRODUCTO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL</th>
                            <th>ESTADO DE PAGO</th>
                            <th></th>
                        </tr>
                    </thead>";
                    while($row = $resultado->fetch_array()){
                        $fecha = $row['ven_fecha'];
                        $id = $row['ven_id'];
                        $cliente = $row['cli_nombre'];
                        $producto = $row['pro_referencia'];
                        $cantidad = $row['ven_cant_pro'];
                        $total = $row['ven_total'];
                        $estado = $row['ven_estado_pago'];
                        echo "
                        <tr>
                            <td>$fecha</td>
                            <td>$id</td>
                            <td>$cliente</td>
                            <td>$producto</td>
                            <td>$cantidad</td>
                            <td>$ $total</td>
                            <td>$estado</td>
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