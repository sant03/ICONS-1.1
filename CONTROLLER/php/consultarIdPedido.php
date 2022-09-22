<?php 
include ('config.php');

$consulta = "SELECT ped_id, MAX(ped_id) FROM pedidos;";

$resultado = mysqli_query($conex,$consulta);
$rowPedId = mysqli_fetch_array($resultado);

$pedId = $rowPedId['MAX(ped_id)']+1;
echo $pedId;