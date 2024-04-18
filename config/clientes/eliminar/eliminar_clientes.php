<?php
require_once('../../consulta.php');
$IDCliente = $_GET ['IDCliente'];

$query = "DELETE FROM clientes WHERE IDCliente = '$IDCliente'";

$conexion->query($query);

header("location: ../../../clientes.php");
?>

