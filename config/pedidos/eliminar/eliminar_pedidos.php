<?php
require_once('../../consulta.php');
$IDPedido = $_GET ['IDPedido'];

$query = "DELETE FROM detalles_pedido WHERE IDPedido = '$IDPedido'";

$conexion->query($query);

header("location: ../../../pedidos.php");
?>
