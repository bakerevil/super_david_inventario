<?php
require_once('../../consulta.php');
$IDPedido = $_POST ['IDPedido'];
$pedido = $_POST ['pedido'];
$producto = $_POST ['producto'];
$cantidad = $_POST ['cantidad'];
$codigo = $_POST ['codigo'];


$query = "INSERT INTO detalles_pedido (pedido, producto, cantidad, codigo) VALUES ('$pedido', '$producto','$cantidad','$codigo')";
$conexion->query($query);
header("Location: ../../../pedidos.php");
?>