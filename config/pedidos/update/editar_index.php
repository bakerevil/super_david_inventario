<?php
require_once('../../consulta.php');
$IDPedido = $_POST['IDPedido'];
$pedido = $_POST['pedido'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$codigo = $_POST['codigo'];



$query = "UPDATE detalles_pedido set  pedido='$pedido', producto='$producto', cantidad='$cantidad', codigo='$codigo' WHERE IDPedido= '$IDPedido' ";

$conexion->query($query);


header("location: ../../../pedidos.php");
?>

