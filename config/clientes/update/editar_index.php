<?php
require_once('../../consulta.php');
$IDCliente = $_POST['IDCliente'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$producto = $_POST['producto'];
$pedido = $_POST['pedido'];



$query = "UPDATE clientes set  nombre='$nombre', email='$email', producto='$producto', pedido='$pedido' WHERE IDCliente= '$IDCliente' ";

$conexion->query($query);


header("location: ../../../clientes.php");
?>

