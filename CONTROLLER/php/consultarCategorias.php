<?php 
include ('config.php');

$consulta = "SELECT nom_categoria FROM categorias;";

$resultado = mysqli_query($conex,$consulta);
while($data = $resultado->fetch_array()){   
    $categoria = $data['nom_categoria'];
    
    echo "
    <option value='$categoria'>$categoria</option>";
}