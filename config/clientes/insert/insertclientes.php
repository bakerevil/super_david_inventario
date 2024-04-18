<?php
require_once('../../consulta.php');
$IDCliente = $_POST ['IDCliente'];
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$producto = $_POST ['producto'];
$pedido = $_POST ['pedido'];


$query = "INSERT INTO clientes (nombre, email, producto, pedido) VALUES ('$nombre', '$email','$producto', '$pedido')";
$conexion->query($query);
header("Location: ../../../clientes.php");
?>